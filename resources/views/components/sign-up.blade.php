<x-head>
    Sign Up
</x-head>
<x-nav></x-nav>
<div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6 offset-md-3 align-items-center">
            <form method="POST" action="sign-up" class="form-group align-items-center mt-5 invalid">
                <fieldset>
                    <legend class="text-center mt-5">Registration</legend>
                    @csrf
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"><br>
                    @error('name')
                    <span class="alert-warning">{{$message}}</span>
                    @enderror
                    <input type="text" name="surname" class="form-control" placeholder="Surname"><br>
                    @error('surname')
                    <span class="alert-warning">{{$message}}</span>
                    @enderror
                    <input type="email" name="email" class="form-control" placeholder="E-mail"><br>
                    @error('email')
                    <span class="alert-warning">{{$message}}</span>
                    @enderror
                    <input type="password" name="password" class="form-control" placeholder="Password"><br>
                    @error('password')
                    <span class="alert-warning">{{$message}}</span>
                    @enderror
                    <input type="password"name="canfirm-password" class="form-control" placeholder="Canfirm Password"><br>
                    @error("canfirm-password")
                    <span class="alert-warning">{{$message}}</span>
                    @enderror
                    <input type="submit" class="btn btn-success form-control offset-sm-4 col-sm-4 offset-sm-4 align-content-center" value="Send"><br>
                    <a class="btn offset-sm-4 col-sm-4 offset-sm-4" href="/sign-in">Du you have acaunt?</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
