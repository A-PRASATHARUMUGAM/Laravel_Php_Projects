<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    //

    public function loginfunct(Request $request){

        $request->validate(
            [
                'email'=>'required',
                'password'=>'required|max:8'
            ]
        );


        $email=$request->input('email');
        $password=$request->input('password');


        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $user=User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/home');
        }else{
            
            return back()->withErrors([
                'email'=>"invalide Email",
                'password'=>"invalide password"
            ]);
        }

    }

    public function logout(){
        Auth::logout();
       return redirect()->route('login');
    }
}
