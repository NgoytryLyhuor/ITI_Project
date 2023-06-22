<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Technical Institute</title>
    <link rel="icon" href="{{ asset("backend/assets/logo.png") }}">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="{{ asset("backend/assets/css/bootstrap.css") }}">
    <!-- index css link -->
    <link rel="stylesheet" href="{{ asset("backend/assets/css/frontend/index.css") }}">
    <!-- font link -->
    <link rel="stylesheet" href="{{ asset("backend/assets/css/font.css") }}">
    <!-- Icons Css -->
    <link href="{{ asset("backend/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />

</head>
<body>
124567i
    @include('frontend.layout.main_header')
    
    <!-- slide bar  -->
    <div class="container w-75 slide bg-dark p-0 overflow-hidden mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.pinimg.com/564x/1c/5a/3a/1c5a3a564928758237fa3fab37d78f7a.jpg" style="object-fit: cover;" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/564x/5a/26/6e/5a266e448add93deab367d87173e9f25.jpg" style="object-fit: cover;" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/564x/2f/6b/52/2f6b5218c70ea5d5641b9a896514b7da.jpg" style="object-fit: cover;" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- body -->
    <div class="container w-75 p-0 mt-4">
        <div class="row">
            <h5 class="mb-4">Academics</h5>
            <div class="row">

                <div class="col-4 mb-3">
                    <a href="">
                        <div class="container-fluid Academics_box d-flex align-items-center">
                            <p class="m-0 text-dark">ព័ត៌មានវិទ្យា</p>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a href="">
                        <div class="container-fluid Academics_box d-flex align-items-center">
                            <p class="m-0 text-dark">រថយន្ត</p>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a href="">
                        <div class="container-fluid Academics_box d-flex align-items-center">
                            <p class="m-0 text-dark">បរិក្ខាត្រជាក់</p>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a href="">
                        <div class="container-fluid Academics_box d-flex align-items-center">
                            <p class="m-0 text-dark">លោហៈ</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-8">

                <h5 class="mt-2 mb-4">ITI Community</h5>
                <div class="row">

                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid news_box p-0 overflow-hidden">
                                <div class="new_box_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="news_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid news_box p-0 overflow-hidden">
                                <div class="new_box_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="news_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid news_box p-0 overflow-hidden">
                                <div class="new_box_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="news_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid news_box p-0 overflow-hidden">
                                <div class="new_box_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="news_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid news_box p-0 overflow-hidden">
                                <div class="new_box_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="news_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយកបុគ្គលិក និស្សិតបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយកបុគ្គលិក និស្សិតបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយកបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយកបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="{{ route('more') }}" target="_blank">
                            <div class="container-fluid More_Community p-0 d-flex align-items-center justify-content-center">
                                <p class="text-dark text-center h6 m-0">More Community...</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <h5 class="mb-4">Announcements</h5>
                <div class="row">

                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="">
                            <div class="container-fluid notice p-0 overflow-hidden">
                                <div class="notice_details text-dark">
                                    <p class="mt-2">បុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូងបុគ្គលិក និស្សិត និងសមាជិកក្រុមយុវជន សសយក ប្រចាំសាកលវិទ្យាល័យន័រតុន បានរៀបចំ យុទ្ធនាការបត់បេះដូង</p>
                                    <h6 class="text-secondary">February 18, 2023 5:00 PM</h6>
                                </div>
                                <div class="notice_img overflow-hidden bg-dark h-100">
                                    <img src="https://i.pinimg.com/564x/ce/b7/6f/ceb76f0d2f620ba5ffcfbd0d6139ee31.jpg" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="{{ route('more') }}" target="_blank">
                            <div class="container-fluid More_Community p-0 d-flex align-items-center justify-content-center">
                                <p class="text-dark text-center h6 m-0">More Announcements...</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include("frontend.layout.footer")


</body>
</html>

<!-- Remix icon js-->
<script src="../assets/js/pages/remix-icons-list.js"></script>
<!-- bootstrap js -->
<script src="../assets/js/bootstrap.js"></script>