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
    return view('master.masterLayout');
});
Route::get('/profil', function () {
    return view('Profil');
});
Route::get('/blank', function () {
    return view('Blank');
});
Route::get('/cards', function () {
    return view('Cards');
});







// use App\Http\Controllers\parameters;
// Route::get('/{username}',
//     [parameters::class,'param']
//     );
