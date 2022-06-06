<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if($email == "admin@gmail.com")
            {    
                $request->session()->put('admin', true);
            }

            return redirect('index');
        } else {        
            return redirect('login');
        }
    }

    public function signout()
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
