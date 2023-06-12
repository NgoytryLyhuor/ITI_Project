<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/more_bio','more_bio')->name('more');
    Route::get('/bio/details','bio_details')->name('bio_details');
    Route::get('/student/login','student_login')->name('student_login');
    Route::get('/student/register','student_register')->name('student_register');
    Route::get('/about_us','about_us')->name('about_us');
    Route::get('/department','department')->name('department');


});
