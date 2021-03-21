<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisrtController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.profile'));
        }
        if($request['password']!==$request['confirm']) {
            return redirect(route('user.sign-up'))->withErrors([
                'confirm' => 'Passwords is not ==',
                'password'=>'Password is not a ecvivalanet'

            ]);
        }
        $validateData=$request->validate([
            'name'=>'required|alpha_dash|min:3',
            'surname'=>'required|alpha_dash|min:3',
            'email'=>'required|unique:users|email|max:255',
            'password'=>'required|min:8',
            'confirm'=>'required'
        ]);

//        if(User::where('email',$validateData['email'])->exists()){
//            return redirect(route('user.sign-up'))->withErrors([
//                'email'=>'This email is a bizi'
//            ]);
//        }
        $user=User::create($validateData);
        if($user){
            \ Auth::login($user);
            return redirect(route('user.profile'));
        }
        return redirect(route('sign-up'))->withErrors([
            'formErrors'=>"we cen not registration"
        ]);
    }
}
