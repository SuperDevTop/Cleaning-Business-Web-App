<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(Request $request)
    {
           $request->validate([
               'name' => 'required|min:4|unique:users',
               'email' => 'required|email',
               'password' => 'required|min:5|confirmed',
            //    'password_confirmation' => 'required|min:5|confirmed'
           ]);

           $user = new User();
           $user->name = $request->name;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);
           $user->save();

           return redirect('login');
           
    }
}
