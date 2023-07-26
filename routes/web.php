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
// Route::get('/createtask',function(){
//        return view('createtask');
// });
// Route::get('/managetask',function(){
//     return view('managetask');
// });
Route::get('/',function(){
  return view ('auth.login');
});
Route::resource('task','App\Http\Controllers\TaskController')->middleware('auth');

Auth::routes();
Route::get('task/generate/pdf','App\Http\Controllers\TaskController@createpdf')->name('createpdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
