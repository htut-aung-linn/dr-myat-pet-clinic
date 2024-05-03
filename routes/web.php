<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('Home');
});

Route::get('/PetProduct.com/{cate}', function ($cate) {
    return view('product', ['cate'=> $cate]);
});

Route::get('/petCare.com', function () {
    return view('petCare');
});

Route::get('/AboutUs.com', function () {
    return view('about');
});

Route::get('/PetProduct.com', function () {
    return view('product', ['cate'=> "All"]);
});

