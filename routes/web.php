<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;

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
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/suscripciones', function () {
    return view('suscripciones');
});

Route::post('/sendEmail', function (){
    Mail::to(request()->destinatario)->send(new TestMail(request()->mensaje, request()->subject));
    return redirect('contact')->with('success', 'Correo enviado con éxito.');
})->name('sendEmail');

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);