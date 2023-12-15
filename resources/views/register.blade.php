<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Register page!</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#2AA1FD;">
        <img src="image/organization (1).png" alt=""style="margin-left: 20px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <h4><a class="nav-link active text-white" aria-current="page" href="login">Organization <br>Management</a></h4>
          </li>
        </ul>
      </div>
  </nav>
    <section class="container mt-5"style="width: 50%; height:50%">
        <div class="row">
            <h2 class="text-center">Register Here</h2>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif
                @if (session('errors'))
                    <div class="alert alert-success" role="alert">{{ session('errors') }}</div>
                @endif
                <form class="" action="/register" method="POST" >
                    @csrf
                    <div class="mb-3 mt-5 ">
                        <label for="exampleInputEmail1" class="form-label"style="font-size: large;">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"placeholder="Email" aria-describedby="emailHelp"style="border: 1px solid #2AA1FD; height: 60px;    font-weight: 500; border-radius: 11px;">
                        {{-- <div id="emailHelp" class="form-text"></div> --}}
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"style="font-size: large;">Password</label>
                        <input type="password" class="form-control" name="password"placeholder="Password" id="exampleInputPassword1"style="border: 1px solid #2AA1FD; height: 60px;    font-weight: 500; border-radius: 11px;">
                    </div>
                    <div class="text-center"> 
                        <button type="submit" class="btn mb-5" style="width:100%;color:white; background:#4edb73; border-radius: 11px;height: 65px;font-size: x-large;">Register Here</button>
                    </div>
                </form>
            </div>
        </div>   
    </section>
    
</body>
</html>