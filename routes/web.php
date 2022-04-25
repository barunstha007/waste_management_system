<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

//Home Controller

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::post('/pickup',[HomeController::class,'pickup']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/userfeedback',[HomeController::class,'userfeedback']);
Route::post('/feedback',[HomeController::class,'feedback']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Admin Controller

Route::get('/add_truck_view',[AdminController::class,'addtruck']);
Route::post('/upload_truck',[AdminController::class,'upload']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancled/{id}',[AdminController::class,'cancled']);
Route::get('/showtruck',[AdminController::class,'showtruck']);


Route::get('/deletetruck/{id}',[AdminController::class,'deletetruck']);
Route::get('/updatetruck/{id}',[AdminController::class,'updatetruck']);
Route::post('/edittruck/{id}',[AdminController::class,'edittruck']);
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
Route::get('/showfeedback',[AdminController::class,'showfeedback']);











