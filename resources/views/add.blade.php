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
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <title>Home Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#2AA1FD;">
        <img src="image/organization (1).png" alt=""style="margin-left: 20px;">
        {{-- <i class="fa-solid fa-building-columns text-white"style="font-size: 50px;"></i> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <h4><a class="nav-link active text-white" aria-current="page" href="#">Organization
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
          margin: 4px 37px;
          border-radius:10px;
          cursor: pointer;"><a
                    href="{{ url('/addEmployee') }}" style="text-decoration: none; color:#2AA1FD; font-weight: 500;
                    font-size: larger;">Add
                    Employee</a></button>

        </div>
    </nav>
    <section class="container mt-5">
        @foreach ($viewdata as $data)
            <div class="center d-flex justify-content-evenly">
                <div class="row mt-3 border rounded-3 shadow-sm" style="    height: 90px;
                width: 50rem;
            ">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <img src="image\profile\{{ $data->image }}" alt="" width="100px" height="100px" style="border-radius: 100%;height: 64px;    width: 67px;    margin-top: 11px;">
                    </div>
                    <div class="col-md-6 mt-4">
                        <h5 style="margin-left: -97px; margin-top: 7px;">{{ $data->fname }} {{ $data->lname }}</h5>
                    </div>
                    <div class="col-md-2 mt-4">
                        <a href="/customerprofile/{{ $data->id }}" style="text-decoration: none; color:#2AA1FD; margin-left: 87px;"><i
                                class="fa-solid fa-chevron-right icon-circle" style="color:#2AA1FD; margin-top: 11px;"></i></a>
                    </div>
                    {{-- <div class="col-sm-12">
                  <div class="card"
                      style="
                      /* padding: 20px;
                      margin: 20px; */
                      background-color: #fff;
                      border: 1px solid #ccc;
                      border-radius: 5px;
                      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                      <div class="card-body">
                          <h5 class="card-title"><img src="image\security-img1.png" alt="">
                              {{ $data->fname }}{{ $data->lname }}
                              <a href="/customerprofile/{{ $data->id }}"
                                  style="text-decoration: none; color:#2AA1FD"><i
                                      class="fa-solid fa-chevron-right icon-circle"
                                      style="margin-left: 1000px; margin-bottom:10px;color:#2AA1FD"></i></a>
                          </h5>
                      </div>
                  </div>
              </div> --}}
                </div>
            </div>
        @endforeach
    </section>
</body>

</html>
