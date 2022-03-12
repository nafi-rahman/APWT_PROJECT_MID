@extends('layouts.appAdmin')
@section('contentAdmin')
<br><br>
     <h1>Add User</h1>
    <form action= "{{route('addUser')}}" class "form-group" method = "post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row ">
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
                <button type="submit" class="btn btn-success">Add User</button>
            </div>

        </div>
        </div>
    </form>
  @endsection
