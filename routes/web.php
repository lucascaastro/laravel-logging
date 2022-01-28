<?php

use App\Http\Controllers\LoggingController;
use App\Models\Logging;
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
    logger()->error('Alguem logou');
    return view('welcome');
});

Route::get('/sub/{num1}/{num2}', [
    LoggingController::class,
    'show',
]);