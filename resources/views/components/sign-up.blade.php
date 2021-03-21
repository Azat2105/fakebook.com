<x-head>
    Sign Up
</x-head>
<x-nav></x-nav>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto ">
            <form method="POST" action="sign-up" class="form-group mx-auto novalidate">
                <fieldset>
                    <legend class="text-center mt-1 mb-1">Registration</legend>
                    @csrf
                    <input type="text" id="name" name="name" class="form-control mb-2 {{$errors->has('name') ? 'is-invalid' : ''}}"
                           placeholder="Name:  Plise write your Name!" value="{{Request::old('name') ?: ''}}">
                    @error('name')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input type="text" name="surname" id="surname" class="form-control mb-2 {{$errors->has('surname') ? 'is-invalid' : ''}} "
                           placeholder="Surname:  Plise write your Surname!" value="{{Request::old('surname') ?: ''}}">
                    @error('surname')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input type="email" name="email" id="email" class="form-control mb-2 {{$errors->has('email') ? 'is-invalid' : ''}}"
                           placeholder="Email:  Plise write your Email! (user@gmail.com)" value="{{Request::old('email') ?: ''}}">
                    @error('email')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input type="password" name="password" id="password" class="form-control mb-2 {{$errors->has('password') ? 'is-invalid' : ''}}"
                           placeholder="Password:  Plise write minimum 8 simbol!">
                    @error('password')
                    <span class="alert-danger ">{{$message}}</span>
                    @enderror
                    <input type="password"name="confirm" id="confirm" class="form-control mb-2 {{$errors->has('confirm') ? 'is-invalid' : ''}}"
                           placeholder="Confirm Password:  Plise repit your Password">
                    @error("confirm")
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input type="submit" class="btn btn-success form-control offset-sm-4 col-sm-4 offset-sm-4 align-content-center" value="Send"><br>
                    <a class="btn offset-sm-4 col-sm-4 offset-sm-4" href="/sign-in">Du you have acaunt?</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>

