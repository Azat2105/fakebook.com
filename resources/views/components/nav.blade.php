{{--@extends('components.head')--}}

<nav class="navbar  navbar-dark  bg-dark">
    <a class="navbar-brand btn btn-outline-info" href="/">Fakebook</a>
    <div class="float-md-left">
        @if(!\Illuminate\Support\Facades\Auth::check())
        <a class="btn btn-outline-info" href="/sign-in">Sign in</a>
        <a class="btn btn-outline-info" href="/sign-up">Sign up</a>
            @else
            <a class="btn btn-outline-info" href="/sign-in">Edit Profile</a>
            <a class="btn btn-outline-info" href="/logout">Logout</a>
        @endif
    </div>
</nav>

