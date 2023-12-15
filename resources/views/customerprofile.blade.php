<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Customer profile</title>
</head>
<style>
    body {
        background-color: #F3F7F8;
        /* Light gray */
    }
</style>

<body>
        <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#2AA1FD;">
        {{-- <img src="image/organization (1).png" alt=""> --}}
        <i class="fa-solid fa-building-columns text-white"style="font-size: 50px;margin-left: 20px;"></i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <h4><a class="nav-link active text-white" aria-current="page" href="login">Organization
                            <br>Management</a></h4>
                </li>
            </ul>
            <button class="button button4"
                style="  background-color: white; /* Green */
          border: none;
          color: #2AA1FD;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 34px;
          width: 136px;
          border-radius:10px;
          cursor: pointer;"><a
                    href="{{ url('/add') }}"
                    style="text-decoration: none; color:#2AA1FD;font-weight: 500;
                    font-size: larger;">Back</a></button>
        </div>
    </nav>
    <section class="container my-5" style="width:50%">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            {{-- <div class="alert alert-success">{{session('success')}}</div> --}}
        @endif
        <form method="POST" action="/customerprofile">
            @csrf
            <div class="row">
                <div class="col-lg-6 mt-4">
                    <div class="card "
                        style="height: 74%; border-radius: 15px;
                            border: none;
                            width: 24rem; ">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview">
                                    <img src="{{ asset('image\profile') }}\{{ $user->image }}"
                                        class="card-img-top " style="border-radius: 50%;
                                        height: 170px;
                                        width: 170px;
                                        margin-top: 6px;
                                        margin-left: 5px;" alt="{{ $user->image }}">
                                </div>
                            </div>
                            <h5 class="card-title text-center mt-4" style="font-size: xx-large;">{{ $user->fname }}&nbsp;{{ $user->lname }}</h5>
                        </div>
                        {{-- <img src="{{ asset('image\profile') }}\{{ $user->image }}" class="card-img-top mt-5"
                            alt="{{ $user->image }}"
                            style="width: 150px; height:150px; margin-left:60px; border-radius:50%; margin-left: 113px;">
                            <i class="fa-solid fa-pen-to-square"></i>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-1" style=" font-size: xx-large;">
                                {{ $user->fname }}&nbsp;{{ $user->lname }}</h5>
                            <p class="card-text"></p> --}}
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
                {{-- </div> --}}
                <div class="col-lg-6">
                    <div class="mb-3">
                        <input class="form-control form-control-lg" type="hidden" name="user_id"
                            placeholder="First name" aria-label=".form-control-lg example" value="{{ $user->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"style="font-size: large;">First
                            Name</label>
                        <input class="form-control form-control-lg" type="text"
                            name="fname"style="border: 1px solid #2AA1FD; height: 60px; font-weight: 500; border-radius: 11px;"
                            placeholder="First name" aria-label=".form-control-lg example" value="{{ $user->fname }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"style="font-size: large;">Last
                            Name</label>
                        <input class="form-control form-control-lg" type="text"
                            name="lname"style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px; font-weight: 500;"
                            placeholder="Last name" aria-label=".form-control-lg example" value="{{ $user->lname }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"style="font-size: large;">Phone
                            Number</label>
                        <input class="form-control form-control-lg" type="text" name="phone"
                            placeholder="Phone number"style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px; font-weight: 500;"
                            aria-label=".form-control-lg example" value="{{ $user->phone }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"style="font-size: large;">Email</label>
                        <input class="form-control form-control-lg" type="text" name="email"
                            placeholder="Email"style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;    font-weight: 500;"
                            aria-label=".form-control-lg example" value="{{ $user->email }}">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn text-white form-control form-control-lg"
                            style="width:100%; background:#4edb73; border-radius: 11px;height: 65px;font-size: x-large;">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
