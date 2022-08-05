<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admission;



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

Route::get('/All',[admission::class,'adm_detail']);
Route::get('/new_admission',[admission::class,'adm_form']);
Route::post('/new_admission',[admission::class,'adm_insert']);
Route::get('/adm_detail/{id}',[admission::class,'stu_detail']);
Route::get('/stu_update/{id}',[admission::class,'stu_edit']);
Route::put('/stu_update/{id}',[admission::class,'student_update']);
Route::get('/stu_delete/{id}',[admission::class,'stu_delete']);

Route::get('/',[admission::class,'index']);
 
Route::post('/ login', [admission::class,'check'])->name('login.check');
 
Route::post('/login', [admission::class,'logout'])->name('user.logout');
 
Route::get('/login', [admission::class,'index'])->name('student.login');




