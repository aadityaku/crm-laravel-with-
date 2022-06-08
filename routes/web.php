<?php

use App\Http\Controllers\CompanieController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StripeController;
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
Route::get("/state",[HomeController::class,"distance"])->name("distance");
Route::get('/stripe', [StripeController::class, 'stripe'])->name("stripe.payment");
Route::post('/stripe/payment', [StripeController::class, 'stripePost'])->name('stripe.post');

Route::get("/",[HomeController::class,"index"])->name("home")->middleware("auth");

Route::resource("companie",CompanieController::class)->middleware("auth");
Route::resource("employee",EmployeeController::class)->middleware("auth");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
