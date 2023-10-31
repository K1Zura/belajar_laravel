<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = teacher::get();
    	 return view('teacher', ['teacherlist' => $teacher]);
    }
    
    public function show($id)
    {
        $teacher = teacher::with('class.student')
        ->findOrFail($id);
    	 return view('teacher_detail', ['teacher' => $teacher]);
    }
}
