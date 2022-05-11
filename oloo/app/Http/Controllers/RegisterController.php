<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;

class RegisterController extends Controller
{

    /**
     * @param
     * 
     * return view
     * 
     * 
    */


    public function logout() {
        
    Auth::logout();
    return redirect('/login');
    
    }

    public function login()
    {
        return view('login');
    }


    /**
     * @param $request
     * 
     * return view
    */
    public function loginPost(Request $request)
    {

        $request->validate([
                'email' => 'required|email',
                'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
                    ]))
         {

            $logg = User::findOrFail(Auth::user()->id);
            $logg->save();
            return redirect('/complain');

        }
         return redirect('/login')->with('status', 'Login  incorrect!');
    }

   public function store(request $request)
   {

    $request->validate([
                'name' => 'required',
                'phone_number' => 'required|digits:10',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'selectperson' => 'required'
    ]);
       $customer = new User;
       $customer->name=$request->name;
       $customer->email=$request->email;
       $customer->phone_number=$request->phone_number;
       $customer->selectperson=$request->selectperson;
       $customer->password=Hash::make($request->password);
       $customer->save();
       return redirect('/register')->with('status', 'Registeration has been successfull');
   }


   public function ticketList()
   {
        $ticketList = auth()->user()->ticket;
        return view('ticketlist');
   }

   public function complain(request $request)
   {
        $user = Auth::user()->id;
        $ticket = new Ticket;
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/images' ;
        $file->move($destinationPath,$fileName);
        $ticket->description  = $request->msg;       
        $ticket->image = $fileName;
        $ticket->user_id=$user; 
        $ticket->save();
      return redirect('/complain')->with('status', 'your complain has been submited');
 
    }

   }

