@extends('layouts.landingpage')
@section('bottom')
    <style>
        #right,#left {
            background-image: none;
            background-color: #fde9d3;
            margin-top: -20em;
        }

        html {
            background-color: #fdf8f2;
        }
    </style>
    <div class="d-flex justify-content-center" id="mainbottom">
        <div class="container">
            <h2 class=" mb-2 text-uppercase">Creating an account with us is easy and effortless.</h2>
            <p class=" mb-2 text-uppercase" id="sub-txt"> creating an account will unlock new features and help you keep track of your history.</p>
            <br>

            <h2 class="mb-2 text-uppercase" >Ready to access all of the amazing features? <a href="{{route('registration')}}" class=" fw-bold" id="link" ">SignUp Now </a></h2>
            <br>
            <p class="mb-2 text-uppercase" >already have an account? <a href="{{route('registration')}}" class=" fw-bold" id="link" ">Sign In</a></p>

        </div>
    </div>

@endsection


