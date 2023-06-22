<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Technical Institute</title>
    <link rel="icon" href="{{ asset("backend/assets/logo.png") }}">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="{{ asset("backend\assets/css/bootstrap.css") }}">
    <!-- index css link -->
    <link rel="stylesheet" href="{{ asset("backend\assets/css/frontend/department.css") }}">
    <!-- font link -->
    <link rel="stylesheet" href="{{ asset("backend\assets/css/font.css") }}">
    <!-- Icons Css -->
    <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />

</head>
<body>
    @include('frontend.layout.main_header')

    <div class="container w-75 mt-5 p-0">
        <div class="row">
            <div class="col-6 mb-3">
                <a href="">
                    <div class="container box">
                        <h2 class="text-center p-2">ព័ត៌មានវិទ្យា</h2>
                        <ul>
                            <li>Welcome massage</li>
                            <li>Program</li>
                            <li></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-6 mb-3">
                <a href="">
                    <div class="container box">
                        <h2 class="text-center p-2">រថយន្ត</h2>
                        <ul>
                            <li>Welcome massage</li>
                            <li>Program</li>
                            <li></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-6 mb-3">
                <a href="">
                    <div class="container box">
                        <h2 class="text-center p-2">បរិក្ខាត្រជាក់</h2>
                        <ul>
                            <li>Welcome massage</li>
                            <li>Program</li>
                            <li></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-6 mb-3">
                <a href="">
                    <div class="container box">
                        <h2 class="text-center p-2">លោហៈ</h2>
                        <ul>
                            <li>Welcome massage</li>
                            <li>Program</li>
                            <li></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    @include('frontend.layout.footer')

    
</body>
</html>