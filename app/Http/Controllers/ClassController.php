<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
    	$class = ClassRoom::get();
    	return view('classroom', ['classlist' => $class]);
    }

    public function show($id)
    {   
        $class = classroom::with('student', 'homeroom')
        ->findOrFail($id);
		return view('classroom_detail', ['class' => $class]);
    }
}