<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ParantController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// Route::get('/','HomeController@index');
// Route::get('/about','HomeController@about');
// Route::get('/coursat','HomeController@coursat');
// Route::get('/contact','HomeController@contact');
// Route::get('/details','HomeController@details');
// Route::get('/details','HomeController@details');

Route::middleware(['auth'])->group(function(){
Route::resource('teachers', 'TeacherController');
Route::resource('/teachers', 'TeacherController');
Route::resource('students','StudentController');
Route::resource('course', 'CourseController');
Route::resource('parant', 'ParantController');
Route::get('/admin', 'HomeController@welcome');
Route::get('/Teacher', 'HomeController@Teacher');
});


Route::resource('/', 'HomeController');
Route::get('/about','HomeController@about');
Route::get('/coursat','HomeController@coursat');
Route::get('/contact','HomeController@contact');
Route::get('/pricing','HomeController@pricing');

Auth::routes();

