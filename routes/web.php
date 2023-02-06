<?php

use App\Http\Requests\LoginRequest;
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
    return inertia('Home');
})->name('home');

Route::get('login', function () {
    return inertia('Login');
})->name('login');

Route::post('login', function (LoginRequest $request) {
    $request->authenticate();

    $request->session()->regenerate();

    return redirect()->intended(route('home'));
});
