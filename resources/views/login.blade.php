<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Login page!</title>
</head>
<style>
  body {
    background-color:#F3F7F8 /* Light gray */
  }
</style>
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
  <div class="text-center row" style="width: 300px;
  height: 300px;
  border-radius: 0 0 300px 0px;
  background-color: #E0EEF9;" ></div> 


    <section class="container "style="width: 50%">
        <div class="row">
            <div class="col-md-6 offset-md-3">
              <form class="container" method="POST" action="login">
                @csrf
                 <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label" style="font-size: x-large;"placeholder="Email">Email ID</label>
                  <input class="form-control form-control-lg" style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;" type="text"  name="email" placeholder="Email" aria-label="emailhelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label" style="font-size: x-large;" placeholder="password">Password</label>
                  <input class="form-control form-control-lg" type="text" style="border: 1px solid #2AA1FD; height: 60px; border-radius: 11px;"  name="password" placeholder="Password" aria-label=".form-control-lg example">
                </div>
                <div class="text-center"> 
                <button type="submit" class="btn mb-5 form-control form-control-lg text-white" style="width:100%; background:#4edb73; border-radius: 11px;height: 65px;font-size: x-large;">Login</button>
               </div>
              </form>
            </div>
        </div> 
        <div class="text-center row mt-5" style="background: #2AA1FD;
        margin-top: -19%;
      margin-left: 121%;
      background: #E0EEF9;
      width: 300px;
      height: 300px;
      border-radius: 300px 0 0 0;
      margin-top:-8px" ></div>    
    </section>
</body>
</html>