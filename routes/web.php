<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PerusahaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    //admin

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
    //Person

// Route::get('/contact', function () {
//     return view('person.contact');
// });

Route::get('/about', function () {
    return view('person.about');
});

Route::get('/testimoni', function () {
    return view('person.testimoni');
});

// Route::get('/pengajuan', function () {
//     return view('person.pengajuan');
// });

    //Auth

Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/admin', function () {
//     return view('admin.homeadmin');
// });

// Route::get('/detail', function () {
//     return view('person.detailloker');
// });



    //perusahaan
Route::post('/create_perusahaan', [PerusahaanController::class, 'create']);
// Route::post('/create_perusahaan', [PerusahaanController::class, 'create']);
// Route::get('/menu/edit/{id}', [PerusahaanController::class, 'edit']);
Route::post('/update/perusahaan/{id}', [PerusahaanController::class, 'update']);

    //Daftar
Route::post('/create/daftar', [PerusahaanController::class, 'daftar'])->middleware('isLogin');


    //person
Route::get('/pengajuan', [PersonController::class, 'pengajuan'])->middleware('isLogin');
Route::get('/profile', [PersonController::class, 'profile'])->middleware('isLogin');
Route::get('/home', [PersonController::class, 'home']);
Route::get('/all', [PersonController::class, 'all']);
Route::get('/detail/{id}', [PersonController::class, 'detail']);
Route::get('/admin', [PersonController::class, 'lokeradmin']);


    //Contact
Route::get('/contact', [PersonController::class, 'contact']);
Route::get('/contact-masuk', [PersonController::class, 'contact_masuk']);
Route::post('/create/contact', [PersonController::class, 'create_contact']);

    //auth
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/create', [AuthController::class, 'create']);

    //daftar
Route::get('/daftar', [PersonController::class, 'daftar']);
Route::get('/view-docuement', [PersonController::class, 'view']);
