<?php 
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Ticket; 
use Illuminate\Support\Facades\Auth; 
use Validator; 
   class UserController extends Controller { 
    public $successStatus = 200; /** * login api * * @return \Illuminate\Http\Response */ 
    
    public function login(Request $request){ 
        $phone = $request->phone_number;
        $users = User::where('phone_number', $phone)->first();
        if($users)
        {
            return response()->json(['user_id' => $users->id,'phone_number' => $users->phone_number,'msg'=>'Succefully Logged in'], 200);
        } 
        else{ 
             $validator = Validator::make($request->all(),
                 [ 'phone_number'=>'required', ]);
                  if ($validator->fails()) { 
                    return response()->json(['error'=>$validator->errors()], 401); 
                    } 
                    $ticket = new User;
                    $ticket->phone_number = $phone; 
                    $ticket->save();
                    return response()->json(['user_id'=>$ticket->id,'phone_number' => $users->phone_number,'msg'=>'Succefully Registered'],
                    $this-> successStatus); 
            
             }
            } /** * Register api * * @return \Illuminate\Http\Response */ 

            public function register(Request $request) { 
                $validator = Validator::make($request->all(),
                 [ 'name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required', ]);
                  if ($validator->fails()) { 
                    return response()->json(['error'=>$validator->errors()], 401); 
                    } 
                  $input = $request->all(); $input['password'] = bcrypt($input['password']); 
                  $user = User::create($input); 
                  $success['token'] = $user->createToken('MyLaravelApp')-> accessToken; 
                  $success['userId'] = $user->id; 
                  $success['email'] = $user->email; 
                  $success['name'] = $user->name; 
                  return response()->json(['success'=>$success], 
                    $this-> successStatus); 
              } 

              /** * details api * * @return \Illuminate\Http\Response */

              
              
         public function complaintlist(Request $request)
           {
               
             $user_id = $request->user_id;  
             $users_check = User::where('id', $user_id)->first();
            if($users_check)
            {
                    $users_ticket = Ticket::where('user_id', $user_id)->get();
                    return response()->json(['success'=>$users_ticket,'path'=>'https://blockchain.webserver9.com/oloo/public/images/name.jpeg'],
                    $this-> successStatus); 
            }
            else
            {
                return response()->json(['fail'=>"please login first"],
                $this-> successStatus);  
            }
                
         }

         public function complaint(Request $request)
           {
               
             $user_id = $request->user_id;  
             $users_check = User::where('id', $user_id)->first();
            if($users_check)
            {
               $validator = Validator::make($request->all(),
                 [ 'description' => 'required', 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048','user_id'=>'required','register_number'=>'required','model_number'=>'required', ]);
                  if ($validator->fails()) { 
                    return response()->json(['error'=>$validator->errors()], 401); 
                    } 
                    $ticket = new Ticket;
                    $path = public_path('images');
                    $file = $request->file('image');
                    $fileName = $file->getClientOriginalName(); 
                    $ticket->image = $fileName;
                    $ticket->description      = $request->description; 
                    $ticket->register_number  = $request->register_number; 
                    $ticket->model_number     = $request->model_number; 
                    $ticket->user_id          = $user_id; 
                    $ticket->save();
                    $file->move($path, $fileName);
                    $users_ticket = Ticket::where('user_id', $user_id)->get();
                    return response()->json(['success'=>$users_ticket,'path'=>'https://blockchain.webserver9.com/oloo/public/images/imagename.jpeg'],
                    $this-> successStatus); 
                }
                else
                {
                    return response()->json(['fail'=>"please login first"],
                    $this-> successStatus);  
                }
                
            }
        }