<?php

use App\Http\Controllers\PersonController;
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register',function(){
    return view('person.create');
});
Route::post('create-person',[PersonController::class,'create']);
Route::get('/all-persons',[PersonController::class,'getAll']);
Route::get('/edit/{id}',[PersonController::class,'edit']);
Route::post('/update/{id}',[PersonController::class,'update']);
Route::get('/delete/{id}',[PersonController::class,'delete']);
