<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;

class AdminRegisterController extends Controller
{
     public function login()
    {
        return view('/admin/login');
    }

    public function signout() {
        
    Auth::logout();
    return redirect('/admin/login');
    
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
            
            try {
                $logg = User::findOrFail(Auth::user()->selectperson=='admin');
                 $logg->save();
                return redirect('/admin/index');
            } catch (\Exception $e) {
                   return redirect('/admin/login')->with('status', 'Login  incorrect!');
            }
            

        }
          return redirect('/admin/login')->with('status', 'Login  incorrect!');
    }
}
