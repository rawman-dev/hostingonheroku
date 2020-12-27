<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class studentcontroller extends Controller
{
    public function disp()
    {
        $student=Student::all();
        return view("welcome",compact('student'));
    }
    public function create()
    {
        return view("create");
    }
    public function store(Request $req)
    {
            $this->validate($req,[
                'studname'=>'required',
                'email'=>'required',
                'phno'=>'required',
                ]);
                $student=new Student;
                $student->studentname=$req->studname;
                $student->email=$req->email;
                $student->phone=$req->phno;
                $student->save();
                return redirect(route('home'))->with("successMsg","Student Added successfully");
    }
}
?>