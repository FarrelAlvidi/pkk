<?php

use App\Http\Controllers\CoursesController;
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
    return view('beranda', ['title' => 'Beranda']);
});
Route::get('/belajar', ([CoursesController::class, 'index']));

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
});
Route::get('/komunitas', function () {
    return view('komunitas', ['title' => 'Beranda']);
});
