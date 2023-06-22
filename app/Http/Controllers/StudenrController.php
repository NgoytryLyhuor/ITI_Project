<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudenrController extends Controller
{
    //
    public function DashboardStudent(){
        return view("admin.student.student_type");
    }
}
