@extends('layouts.logReg')

    @section('content')

    <br><br>
    <h2 class="fw-bold mb-2 text-uppercase">Registration</h2>
    <br>

    <form action= "{{route('registration')}}" class "form-group" method = "post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="password" placeholder="Password" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="email" Placeholder="Email"class="form-control">
            </div>

            <br>
            <div class="form-group">
                <input type="text" name="phone" Placeholder="Phone"class="form-control">
            </div>

            <br>
            <div class="form-group">
                <input type="file" name="image_path" class="form-control">
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-light btn-lg px-5">SUBMIT</button>
            </div>


    </form>
    @endsection
