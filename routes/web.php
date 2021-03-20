<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::name('user.')->group(function (){
    Route::view('/profile','components.profile')->middleware('auth')->name('profile');

    Route::get('/sign-in', function () {
        if (Auth::check()) {
            return redirect(route("user.profile"));
        }
            return view('components.sign-in');

    })->name('sign-in');
    Route::post('/sign-in',[\App\Http\Controllers\LoginController::class,'login']);

    Route::get('/logout',function (){
        Auth::logout();
            return redirect('/');
    })->name('logout');

    Route::get('/sign-up', function () {
        if (Auth::check()){
            return  redirect(route('user.profile'));
        }
        return view('components.sign-up');
    })->name("sign-up");

    Route::post('/sign-up',[\App\Http\Controllers\RegisrtController::class,'save']);
});

