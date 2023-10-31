<?php

namespace App\Http\Controllers;


use App\Models\student;
use App\Models\classroom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(request $request)
    {
		//	lazy loading
    	//  $student = Student::all();
    	//  return view('student', ['pelajar' => $student]);

		//eager loading:lebih hemat
		// $student = Student::get();
    	//  return view('student', ['pelajar' => $student]);

		$keyword = $request->keyword;
		$student = Student::where('name', 'LIKE', '%'.$keyword.'%')
							->orWhere('gender', $keyword)
							->orWhere('nis', 'LIKE', '%'.$keyword.'%')
							->orWhereHas('class', function($query) use($keyword){
								$query->where('name', 'LIKE', '%'.$keyword.'%'); 
								})
							->paginate(10);
    	 return view('student', ['pelajar' => $student]);

    }
	public function show($id)
	{
		$student = student::with(['class.homeroom', 'ekstras'])
				->findOrFail($id);
		return view('student_detail', ['student' => $student]);
	}

	public function create()
	{
		$class = classroom::select('id', 'name')->get();
		return view('student-add', ['class' => $class]);
	}

	public function store(StudentCreateRequest $request)
	{
		$newName = '';
		if($request->file('photo')){
			$extension = $request->file('photo')->getClientOriginalExtension();
			$newName = $request->name.'-'.now()->timestamp.'.'.$extension;
			$request->file('photo')->storeAs('foto', $newName);
		}


		//Validasi lewat controller
		// $validated = $request->validate([
		// 	'nis' => 'unique:student|max:8|required',
		// 	'name' => 'max:50|required',
		// 	'gender' => 'required',
		// 	'class_id' => 'required'
		// ]);
		

		//Cara lama menyimpan data
		// $student = new student;
		// $student->name = $request->name;
		// $student->gender = $request->gender;
		// $student->nis = $request->nis;
		// $student->class_id = $request->class_id;
		// $student->save();

		//Menyimpan data dengan mass assignment
		$request['image'] = $newName;
		$student = student::create($request->all());

		if($student){
			Session::flash('status','success');
			Session::flash('message','Add New Student Success');
		}

		return redirect('/student');
	}

	public function edit(request $request, $id){
		$student = student::with('class')->findOrFail($id);
		$class = classroom::where('id','!=', $student->class_id)->get(['id','name']);
		return view('student-update', ['student' =>$student], ['class' =>$class]);
	}

	public function update(request $request, $id){
		
		$student = student::findOrFail($id);

		//Cara ribet Update
		// $student->name = $request->name;
		// $student->gender = $request->gender;
		// $student->nis = $request->nis;
		// $student->class_id = $request->class_id;
		// $student->save();

		//Update data Mass Asignment
		$student->update($request->all());
		return redirect('/student');

	}

	public function delete($id){
		
		$student = student::findOrFail($id);
		return view('student-delete', ['student' =>$student]);
	}

	public function destroy($id) {
		//Delete dengan query builder
		// $deleteStudent = DB::table('student') -> where('id', $id)->delete();

		
		
		$deletedStudent = student::findOrFail($id);
		$deletedStudent->delete();
		if($deletedStudent){
			Session::flash('kondisi','success');
			Session::flash('pesan','Delete Student Success');
		}
		return redirect('/student');
	}

	public function deletedStudent()
	{
		$deletedStudent = Student::onlyTrashed()->get();
		return view('student-deleted-list', ['student' =>$deletedStudent]);
	}

	public function restore($id) 
	{
		$deletedStudent = Student::withTrashed()->where('id', $id)->restore();
		if($id){
			Session::flash('status-restore','success');
			Session::flash('restore','Restore Student Success');
		}
		return redirect('/student');
	}
}
