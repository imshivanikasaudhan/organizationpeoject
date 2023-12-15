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
    <link rel="stylesheet" href="style.css">
    <title>Organization</title>
    <title>Full Body Color</title>
    <style>
    body {
        background-color: #2AA1FD;
        /* Light gray */
    }
    </style>
</head>

<body>
    <section class="container ">
        {{-- <div class="row"></div> --}}
        <div class="text-center row" style="background: #40ABFD;
        padding: 187px; 
        border-radius-width:50px;
        border-bottom-left-radius: 712px;
        border-bottom-right-radius: 712px;
        color: white;">
            <i class="fa-solid fa-building-columns text-white" style="font-size: 100px;"></i>
            <h1 class="text-center mt-5 text-white">Organization <br>
                Management</h1>
        </div>
        <div class=" text-center mt-5">
            <h3 class="text-white mt-5">Login As</h3>
            <button class="button mt-5 p-3 text-center" style="
                border: none;
                height: 88px;
                font-weight: 600;
                font-size: 28px;
                padding: 20px;
                width: 247px;
                text-align: center;
                transition-duration: 0.4s;
                text-decoration: none;
                overflow: hidden;
                cursor: pointer;
                border-radius: 17px"><a href="{{ url('/login') }}" class="link"
                    style="text-decoration:none; color:black">Super Admin</a></button>
            <button class="button m-4 p-3" style="
                border: none;
                height: 88px;
                font-weight: 600;
                font-size: 28px;
                padding: 20px;
                text-align: center;
                transition-duration: 0.4s;
                text-decoration: none;
                overflow: hidden;
                cursor: pointer;
                border-radius: 17px">Tenant/Company</button>
            <div class="text-center row" style="background: #2AA1FD;;
                margin-top: -19%;
    margin-left: 100%;
    background: #40ABFD;
    width: 300px;
    height: 300px;
    border-radius: 300px 0 0 0;
    margin-top:-100px"></div>
        </div>
    </section>
</body>

</html>