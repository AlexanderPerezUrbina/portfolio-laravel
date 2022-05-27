<?php

use App\Http\Controllers\ContactController;
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
    return view('app.home.index');
});

Route::get('/about', function () {
    return view('app.about.index');
});

Route::post('/contact', [ContactController::class, 'send']);

Route::fallback(function () {
    return view('app.not-found.index');
});
