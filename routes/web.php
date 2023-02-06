<?php

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    return auth()->id()
        ? inertia('Dashboard')
        : inertia('Home');
})->name('Home');

Route::get('login', function () {
    return inertia('Login');
})->name('Login');

Route::post('login', function (LoginRequest $request) {
    $request->authenticate();
    $request->session()->regenerate();
    return redirect()->intended(route('Home'));
});

Route::post('logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect(route('Home'));
})->name('Logout');
