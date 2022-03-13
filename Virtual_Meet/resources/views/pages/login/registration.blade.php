@extends('layouts.logReg')

    @section('content')

    <br><br>

    <h2 class="fw-bold mb-2 text-uppercase">Registration</h2>
    <br>


     <h1>Register as an User</h1>

    <form action= "{{route('registration')}}" class "form-group" method = "post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control">
                @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" name="password" placeholder="Password" class="form-control">
                @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" name="email" Placeholder="Email"class="form-control">
                @error('email')
                <span class = "text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <br>
            <div class="form-group">
                <input type="text" name="phone" Placeholder="Phone"class="form-control">
                @error('phone')
                <span class = "text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <br>
            <div class="form-group">
                <input type="file" name="image_path" class="form-control">
                @error('image_path')
                <span class = "text-danger">{{$message}}</span>
            @enderror
            </div>

            <br>
            <br>
            <div class="form-group">

                <button type="submit" class="btn btn-outline-light btn-lg px-5">Add Student</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>


    </form>
    @endsection
