<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if(\Auth::check()){
            return redirect(route('user.profile'));
        }
       $formData=$request->only(['email','password']);

       if(Auth::attempt($formData)){
          return redirect()->intended(route('user.profile'));
       }
       return redirect('sign-in')->withErrors([
           'email'=>'Sxal mutqayin tvyalner'
       ]);
    }
}
