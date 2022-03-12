@extends('layouts.logReg')
    @section('left-content')


    <div class = "container">
    <br><br>
    <h1>Login Form</h1>
    <form action= "{{route('login')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
            <span>User Name</span>
            <input type="text" name="userName" value = "{{old('userName')}}" class = "form-control">
            @error('userName')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Password</span>
            <input type="password" name="password" value = "{{old('password')}}" class = "form-control">
            @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class ="col-md-4 form-group">
            <input type="checkbox" id="rememberMe" name="RememberMe">
  			<label for="rememberMe">Remember Me</label>
        </div>
        <br>
        @endsection
        @section('bottom-content')
        <input type = "submit" class="btn btn-primary" value = "Login">
        Don't have an account? <a href="{{route('registration')}}">sign-up</a>
        <br><br>
        <a href="{{ route('homeUser') }}">Continue as guest</a>
        @endsection
    </form>
