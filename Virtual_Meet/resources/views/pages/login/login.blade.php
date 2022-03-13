@extends('layouts.logReg')

    @section('content')


    <br><br>
    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
    <form action= "{{route('login')}}" class "form-group" method = "post">
        {{csrf_field()}}

        <div class =" form-group">
            <span class="mb-2 text-uppercase">User Name</span>
            <input type="text" name="userName" value = "{{old('userName')}}" class = "form-control">

        <div class ="col-md-4 form-group">
            <span>User Name</span>
            <input type="text" name="userName" <?php if(isset($_COOKIE['userName'])) {echo $_COOKIE['userName'];} ?>
            value = "<?php if(isset($_COOKIE['userName'])) {echo $_COOKIE['userName'];} ?>" class = "form-control">

            @error('userName')
            <span class="mb-2 text-uppercase">PASSWORD</span>
            @enderror
        </div>
        <br>
        <div class =" form-group">
            <span>Password</span>
            <input type="password" name="password" class = "form-control">
            @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>
        <div class =" form-group">
            <input class="form-check-input" type="checkbox" id="rememberMe" name="RememberMe">

        <div class ="col-md-4 form-group">
            <input type="checkbox" id="rememberMe" name="remember">

  			<label for="rememberMe">Remember Me</label>
        </div>
        <br>



        <input type = "submit" class="btn btn-outline-light btn-lg px-5" value = "Login">
        <br>
        <br>
        <p class="mb-0 fw-bold" >Don't have an account? <a href="{{route('registration')}}" class=" fw-bold" id="link" ">Sign Up</a></p>
        <br><br>
        <a class=" fw-bold"  href="{{ route('homeUser') }}" id="link">Continue as guest</a>



    </form>
    @endsection
