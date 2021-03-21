<x-head>
    Sign In
</x-head>
<x-nav></x-nav>
<div class="container">
    <div class="row">
        <form action="sign-in" method="POST" class="form-group col-md-5 col-sm-5 mx-auto  mt-5">
            <fieldset>
                <legend class="text-center">Login</legend>
                @csrf
                <input type="email" name="email" id="email" class="form-control mb-2  {{$errors->has('email') ? 'is-invalid' : ''}}"
                       placeholder="Email!" autocomplete="false">
                @error('email')
                <span class="alert-danger">{{$message}}</span>
                @enderror
                <input type="password" name="password" id="password" class="form-control mb-2  {{$errors->has('password') ? 'is-invalid' : ''}}"
                       placeholder="Password!">
                @error('password')
                <span class="alert-danger">{{$message}}</span><br>
                @enderror

                <div class="form-check form-check-inline text-center mt-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="remember">
                    <label class="form-check-label" for="inlineCheckbox1">Remember me</label><br>
                </div>
                <input type="submit" class="btn btn-success form-control offset-sm-4 col-sm-4 offset-sm-4 align-content-center" value="Login"><br>
                 <a class=" col-sm-3" href="sign-up">Registration?</a>
                <a class="offset-sm-4 col-sm-3" href="sign-up">Reset Password?</a>
            </fieldset>
        </form>
    </div>
</div>

