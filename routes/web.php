<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
//speaker-details route
Route::get('/speaker-details', function () {
    return view('speaker-details');
});

//send Contact us message
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
