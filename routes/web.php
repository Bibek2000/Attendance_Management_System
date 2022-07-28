<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//batch
Route::prefix('backend/batch')->name('backend.batch.')->controller(\App\Http\Controllers\backend\BatchController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});

//student
Route::prefix('backend/student')->name('backend.student.')->controller(\App\Http\Controllers\backend\StudentController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});

//program

Route::prefix('backend/program')->name('backend.program.')->controller(\App\Http\Controllers\backend\ProgramController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});

//course
Route::prefix('backend/course')->name('backend.course.')->controller(\App\Http\Controllers\backend\CourseController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});

//Teacher
Route::prefix('backend/teacher')->name('backend.teacher.')->controller(\App\Http\Controllers\backend\TeacherController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});
