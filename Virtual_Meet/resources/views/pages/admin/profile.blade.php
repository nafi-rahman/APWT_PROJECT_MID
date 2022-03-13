    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/logReg.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        @include('inc.topNavAdmin')
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;" id="card">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">


                                    <br><br>
                                    <h2 class=" mb-2 text-uppercase">PROFILE</h2>
                                    <form action="{{route('profileAdminEdit')}}" class "form-group" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="container">
                                            <div class="row " id="form">
                                                <div class="form-group">
                                                    <input type="text" name="id" value="{{$user->id}}"
                                                        class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="name" value="{{$user->name}}"
                                                        class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="text" name="password" value="{{$user->password}}"
                                                        class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="text" name="email" value="{{$user->email}}"
                                                        class="form-control">
                                                </div>
@extends('layouts.appAdmin')
@section('contentAdmin')
<br><br>
     <h1>Profile</h1>
    <form action= "{{route('profileAdminEdit')}}" class "form-group" method = "post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row ">
                <div class="form-group">
                    <input type="text" name="id"  value = "{{$user->id}}" class="form-control" readonly>
                </div>
        <div class="form-group">
                <input type="text" name="name"  value = "{{$user->name}}" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="password"  value = "{{$user->password}}" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="email" value = "{{$user->email}}" class="form-control">
            </div>

                                                <br>
                                                <div class="form-group">
                                                    <input type="text" name="phone" value="{{$user->phone}}"
                                                        class="form-control">
                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-md-3">


                                                <img class="img-thumbnail rounded mx-auto d-block" src="{{asset('images/'.$user->image_path)}}"
                                                    alt="Card image cap">


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>

                                <div>
                                    {{-- @yield('footer') --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

    </html>
            <br>
            <br>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img class="img-thumbnail" src="{{asset('images/'.$user->image_path)}}" alt="Card image cap">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        </div>
    </form>
@endsection
