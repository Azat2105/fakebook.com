<x-head>
    Sign In
</x-head>
<x-nav></x-nav>
<div class="container">
    <div class="row">
        <form action="sign-in" method="POST" class="offset-md-3 col-md-6 offset-md-3 form-group mt-5">
            <fieldset>
                <legend class="text-center">Login</legend>
                @csrf
                <input type="email" name="email" class="form-control" placeholder="E-mail"><br>
                @error('email')
                <span class="alert-warning">{{$message}}</span>
                @enderror
                <input type="password"name="password" class="form-control" placeholder="Password"><br>
                @error('password')
                <span class="alert-warning">{{$message}}</span>
                @enderror
                <input type="submit" class="btn btn-success form-control offset-sm-4 col-sm-4 offset-sm-4 align-content-center" value="Login">
                <br> <a class="btn offset-sm-4 col-sm-4 offset-sm-4" href="sign-up">Registration</a>
            </fieldset>
        </form>
    </div>
</div>

