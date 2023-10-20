<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Utils\ApplicationVersion;

use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $version = ApplicationVersion::get();

    return "Api Farm Analize {$version}";
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth:api'])->group(function () {
    Route::get('/protegido', function () {

        return "Protegido";
    });
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
