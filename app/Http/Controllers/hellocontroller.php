<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    public function about()
    {
        
        return view("about");
    }
    public function students()
    {
        
        $stud=\App\Student::all();
        return view("students");
    }
    public function contact()
    {
        return view("contact");
    }
}
