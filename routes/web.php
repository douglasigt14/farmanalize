<?php

use Illuminate\Support\Facades\Route;
use App\Utils\ApplicationVersion;

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

Route::get('/login', function () {
    return "Não autorizado";
})->name('login');

Route::get('/', function () {
    $version = ApplicationVersion::get();

    return "Api Farm Analize {$version}";
});
