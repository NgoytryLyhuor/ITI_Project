<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset("/assets/logo.png") }}">
    <title>Student Information</title>

    <!-- bootstrap link -->
    <link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.css") }}">
    <!-- index css link -->
    <link rel="stylesheet" href="{{ asset("/assets/css/frontend/student_login.css") }}">
    <!-- font link -->
    <link rel="stylesheet" href="{{ asset("/assets/css/font.css") }}">
    <!-- Icons Css -->
    <link href="{{ asset("/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />

</head>
<body class="pb-5">

    <!-- header -->
    <div class="container header w-75 mt-2">
        <div class="container-fluid d-flex justify-content-center">
            <img src="{{ asset("/assets/logo.png") }}" width="110" height="110" alt="">
        </div>
        <div class="container-fluid d-flex justify-content-center mt-2">
            <div class="text-center">
                <h4>វិទ្យាស្ថានបច្ចេកទេសឧស្សាហកម្ម</h4>
                <h6>Industrial Technical Institute</h6>
            </div>
        </div>
    </div>

    <div class="container w-50 mt-3 box">
        <h2 class="mb-5 text-decoration-underline">Register</h2>
        <form action="" class="mt-4">
            @csrf
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">អត្តលេខនិស្សិត</span>
                </div>
                <div class="col-8">
                    <input type="number" name="" id="" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ផ្នែកសិក្សា</span>
                </div>
                <div class="col-8">
                    <select name="" id="" required class="form-select">
                        <option selected value="">Select Department</option>
                        <option value="">ព័ត៌មានវិទ្យា</option>
                        <option value="">រថយន្ត</option>
                        <option value="">បរិក្ខាត្រជាក់</option>
                        <option value="">លោហៈ</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ថ្ងៃខែឆ្នាំកំណើត</span>
                </div>
                <div class="col-8">
                    <input type="date" name="" id="" class="form-control" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                </div>
                <div class="col-8 d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Register</button>
                    <a href="{{ route("student_login") }}"><button type="button" class="btn btn-link text-decoration-underline text-primary">Already have account !</button></a>
                </div>
            </div>

        </form>
    </div>
</body>
</html>
<script src="../assets/js/jquery.js"></script>
<script>

    $(document).ready(function(){
        $("#ad_image").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $("#showImage").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>