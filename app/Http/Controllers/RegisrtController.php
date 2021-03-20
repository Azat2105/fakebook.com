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
        $validateData=$request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        if(User::where('email',$validateData['email'])->exists()){
            return redirect(route('user.sign-up'))->withErrors([
                'email'=>'This email is a bizi'
            ]);
        }
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
