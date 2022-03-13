
@extends('layouts.landingpage')
@section('left')
    <div class="mainleft">
        <h2 class="text-black mb-2 text-uppercase">Welcome to our virtual meeting site</h2>
        <p class="text-black-60  mb-2 text-uppercase"> here you can easily create, join a meeting without even making an account</p>

    </div>

@extends('layouts.appUser')
@section('contentUser')
    <h1>Welcome to the User Home Page</h1>
    <ul><h2>Virtual Meeting</h2></ul>
    <a class = "btn btn-primary" href="{{route('meeting')}}">Meeting</a>

@endsection
@section('right')
    <div id="right-img">
        <div id="joinbtn">
            <button type="button" class="btn btn-outline-dark btn-lg px-5"> start a meeting</button>
        </div>
    </div>
@endsection
@section('bottom')
    <div class="d-flex justify-content-center" id="mainbottom">
        <div class="container">
            <h2 class=" mb-2 text-uppercase">Creating an account with us is easy and effortless.</h2>
            <p class=" mb-2 text-uppercase" id="sub-txt"> creating an account will unlock new features and help you keep track of your history.</p>
            <br>
        </div>
    </div>

@endsection


