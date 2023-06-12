<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    
    <link rel="icon" href="{{ asset("/assets/logo.png") }}">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.css") }}">
    <!-- index css link -->
    <link rel="stylesheet" href="{{ asset("/assets/css/frontend/student_login.css") }}">
    <!-- font link -->
    <link rel="stylesheet" href="{{ asset("/assets/css/font.css") }}">
    <!-- Icons Css -->
    <link href="{{ asset("/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />

</head>
<body>

    <!-- header -->
    <div class="container header w-75 mt-2">
        <div class="container-fluid d-flex justify-content-center">
            <img src="{{ asset("assets/logo.png") }}" width="110" height="110" alt="">
        </div>
        <div class="container-fluid d-flex justify-content-center mt-2">
            <div class="text-center">
                <h4>វិទ្យាស្ថានបច្ចេកទេសឧស្សាហកម្ម</h4>
                <h6>Industrial Technical Institute</h6>
            </div>
        </div>
    </div>

    <div class="container w-50 mt-3 box">
        <h2>Login</h2>
        <form action="" class="mt-4">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">អត្តលេខនិស្សិត / Student ID</span>
                </div>
                <div class="col-8">
                    <input type="text" name="" id="" class="form-control" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ពាក្យសម្ងាត់ / Password</span>
                </div>
                <div class="col-8">
                    <input type="password" name="" id="" class="form-control" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                </div>
                <div class="col-8">
                    <button type="submit" class="btn btn-success">Login</button>
                    <a href="{{ route("student_register") }}"><button type="button" class="btn btn-warning text-white">Register</button></a>
                    <a href=""><button class="btn btn-danger">Forget Password</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>