@extends('layouts.appUser')
@section('contentUser')
    <h1>Welcome to the User Home Page</h1>
    <ul><h2>Virtual Meeting</h2></ul>
    <a class = "btn btn-primary" href="{{route('meeting')}}">Meeting</a>
@endsection
