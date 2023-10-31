<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

//*menampilkan parameter
//Route::get('/about', function(){
//	return 9*9;
//});

//*cara panjang, harus direturn
Route::get('/contact', function(){
	return view('contact', ['name' => 'ikhtiar azra', 'phone' => '0812......']);
});

//cara simple, name ada di view, langsung di view bisa pakai satu cara saja
Route::view('/contact', 'contact', ['name' => 'ikhtiar azra', 'phone' => '0812......']);

//redirect route= memindahkan contactke contact-us
//Route::redirect('/contact', '/contact-us');

route::get('/product', function(){
	return 'product';
});

//route parameters, dengan basic route
route::get('/product/{id}', function($id){
	return 'ini adalah produk dengan id '.$id;
});

//route parameters, dengan view, ada di detail.blade
route::get('/product/{id}', function($id){
	return view('product.detail', ['id'=> $id]);
});


//route prefixes, jika ingin ganti parameter, cukup diganti bagian disamping prefix
Route::prefix('administrator')->group(function () {
route::get('/profil-admin', function(){
	return 'profil-admin';
});

route::get('/about-admin', function(){
	return 'about-admin';
});

route::get('/contact-admin', function(){
	return 'contact-admin';
});

route::get('/profil-admin2', function(){
	return 'profil-admin';
});

route::get('/about-admin2', function(){
	return 'about-admin';
});

route::get('/contact-admin2', function(){
	return 'contact-admin';
});
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/student', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware('must-admin-or-teacher');
Route::get('/student-add', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student-update/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);

Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware('must-admin');
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware('must-admin');
Route::get('/student-deleted', [StudentController::class, 'deletedStudent'])->middleware('must-admin');
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware('must-admin');

Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class/{id}', [ClassController::class, 'show']);

Route::get('/ekstra', [EkstraController::class, 'index'])->middleware('auth');
Route::get('/ekstra/{id}', [EkstraController::class, 'show']);

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher/{id}', [TeacherController::class, 'show']);