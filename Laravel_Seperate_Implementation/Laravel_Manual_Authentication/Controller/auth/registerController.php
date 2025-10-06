<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class registerController extends Controller
{
    //

     public function registerfunct(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.unique' => 'This email is already registered. Please use another one.',
        ]);

        $user = new User;
        $user->name  = $request->input('name');
        $user->email = $request->input('email');
        
        //Hash password before saving
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('home'); 

       
    }


}
