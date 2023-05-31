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
                <h4>វិទ្យាស្ថានបច្ចេកវិទ្យាឧស្សាហកម្ម</h4>
                <h6>Industrial Technical Institute</h6>
            </div>
        </div>
    </div>

    <div class="container w-75 mt-5 box">
        <h2 class="mb-5 text-decoration-underline">Register</h2>
        <form action="" class="mt-4">

            <h5 class="text-center">ព័ត៍មានផ្ទាល់ខ្លួន</h5>
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ឈ្មោះនិស្សិត</span>
                </div>
                <div class="col-8">
                    <input type="text" name="" id="" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ឈ្មោះនិស្សិតអក្សរឡាតាំង</span>
                </div>
                <div class="col-8">
                    <input type="text" name="" id="" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ភេទ</span>
                </div>
                <div class="col-8">
                    <input type="radio" name="gender" id="" class="form-check-input"> Male &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="" class="form-check-input"> Female
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">សញ្ជាតិ</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ទីកន្លែងកំណើត</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">អាស្រ័យដ្ឋានបច្ចុប្បន្ន</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">អ៊ីម៉ែល</span>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">លេខទំនាក់ទំនង</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" required>
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
                    <span class="m-0">មុខរបរ</span>
                </div>
                <div class="col-8">
                    <input type="text" name="" id="" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <span for="ad_image" class="col-4">រូបថតនិស្សិត</span>
                <div class="col-8">
                    <input class="form-control" type="file" id="ad_image" name="ad_image">
                </div>
            </div>
            <div class="row mt-3">
                <label for="image" class="col-4 col-form-label"></label>
                <img id="showImage" class="card-img-top img-fluid" style="object-fit:cover; width: 160px !important;height:160px !important;" src="../assets/images/no_img.jpg" alt="ad_image">
            </div>

            <h5 class="text-center mt-5">ឳពុក</h5>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ឈ្មោះ</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">អាយុ</span>
                </div>
                <div class="col-8">
                    <input type="number" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0"></span>
                </div>
                <div class="col-8">
                    <input type="radio" name="gender" id="" class="form-check-input"> ស្លាប់ &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="" class="form-check-input"> រស់
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">មុខរបរ</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" required>
                </div>
            </div>

            <h5 class="text-center mt-5">ម្តាយ</h5>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">ឈ្មោះ</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">អាយុ</span>
                </div>
                <div class="col-8">
                    <input type="number" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0"></span>
                </div>
                <div class="col-8">
                    <input type="radio" name="gender" id="" class="form-check-input"> ស្លាប់ &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="" class="form-check-input"> រស់
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                    <span class="m-0">មុខរបរ</span>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" required>
                </div>
            </div>

            






            <div class="row mt-3">
                <div class="col-4 d-flex align-items-center">
                </div>
                <div class="col-8 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="{{ route("student_login") }}"><button type="button" class="btn btn-danger">Already have account</button></a>
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