<?php

use App\Models\User;
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
// Hide register after Admin account is created

if (User::count() > 1) {

    Route::get('register', function () {
        return view('auth.login');
    })->name('register');
} else {
    Route::get('register', function () {
        return view('auth.register');
    })->name('register');
}

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('profile.show');
    });
    Route::get('/test', function () {
        $users = User::all();
        return view('test', compact('users'));
    });
    Route::get('invoice', function () {
        return view('invoice');
    });
    Route::get('/staff', function () {
        $users = User::all();
        return view('staff.index', compact('users'));
    })->name('staff');

    Route::get('test2', function () {

        return view('test2');
    });
    Route::get('documentation', function () {

        return view('documentation');
    });

});
