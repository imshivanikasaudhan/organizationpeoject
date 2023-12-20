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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Add Employee</title>
</head>
<style>
    body {
        background-color: #F3F7F8;
        /* Light gray */
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#2AA1FD;">
        <img src="image/organization (1).png" alt="" style="margin-left: 10px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <h4><a class="nav-link active text-white" aria-current="page" href="#" style=" margin-left: 10px; font-weight:400"><strong>Organization</strong>
                            <br>Management</a></h4>
                </li>
            </ul>
            {{-- <form class="d-flex" style="width:10%"> --}}
                <a
                        href="{{ url('/add') }}"
                        style="text-decoration: none; color:#2AA1FD;font-weight: 500; margin: 4px 3px;
                        font-size: larger;"><button class="button button4"
                    style="  background-color: white; /* Green */
          border: none;
          color: #2AA1FD;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 18px;
          font-weight: 600;
          margin: 4px 34px;
          width: 136px;
          border-radius:10px;
          cursor: pointer;">Back</button></a>
            {{-- </form> --}}
        </div>
    </nav>
    <section class="container mt-5">
        <h1 class=text-center>Add Employee</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card"
                    style="
            padding: 20px;
            margin: 20px;
            background-color:#F3F7F8;
            border:none">

                    <div class="col-lg-6 mb-4 " style="margin-left: 138px;">
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <script>
                                swal("Data Added Successfully", "{{ session('message') }}", 'success', {
                                    button: true,
                                    button: "Done",
                                });
                            </script>
                        @endif
                        <form action="/addEmployee" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3">
                                    <div class="avatar-upload1" style="margin-top: -43px;">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"
                                                name="image" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            {{-- <div id="imagePreview"> --}}
                                            <div id="imagePreview" style="background-image: url('image/user.png');">
                                                {{-- <img src="{{ asset('image\profile') }}" class="card-img-top "
                                                        style="border-radius: 50%;
                                                    height: 170px;
                                                    width: 170px;
                                                    margin-top: 6px;
                                                    margin-left: 5px;" alt=""> --}}
                                            </div>
                                        </div>

                                    </div>
                                    <!-- {{-- <i class="fa-solid fa-plus"></i> --}} -->
                                    <!-- {{-- <label for="formFile" class="form-label">Default file input example</label> --}} -->
                                    {{-- <input class="form-control" type="file" id="formFile" name="image"> --}}
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-size: large;">First
                                        Name</label>
                                    <input type="firstname" class="form-control form-control-lg"
                                        style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;"
                                        placeholder="First Name" name="fname" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-size: large;">Last
                                        Name</label>
                                    <input type="lastname" class="form-control form-control-lg"
                                        style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;"
                                        name="lname" placeholder="Last Name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <label for="phonenumber" class="form-label" style="font-size: large;">Phone
                                        Number</label>
                                    <input type="phonenumber" class="form-control form-control-lg"
                                        style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;"
                                        placeholder="Phone No" name="number" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label"
                                        style="font-size: large;">Email
                                        Id</label>
                                    <input type="email" class="form-control form-control-lg "
                                        style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;"
                                        name="email" placeholder="Email Id" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn text-white form-control-lg" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                    style="width:100%; background:#4edb73; border-radius: 11px;height: 65px;font-size: x-large;">Save</button>
                            </div>
                        </form>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button trigger modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel" style="color:#2AA1FD">Employee Added Successfully</h5>
      </div>
      <div class="modal-body">
       <form>
        <h5> Employee Name</h5>
            <br>
          <h5>Email Id</h5>
       </form>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary"style="width:30%; background:#4edb73; border:none; margin-right:160px">Done</button>
      </div>
    </div>
  </div>
</div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
