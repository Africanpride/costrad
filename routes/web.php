<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;


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

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

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

    Route::get('invoice', function () {
        return view('invoice');
    });

    Route::get('manage-roles', function() {
        $users = User::all();
        return view('manage-roles', compact('users'));
    });
    Route::get('staff', function() {
        $users = User::all();
        return view('staff.index', compact('users'));
    })->name('staff');

    Route::view('/', 'welcome');
    // Route::view('manage-roles', 'manage-roles', ['users' => User::all()]);
    // Route::view('staff', 'staff.index', ['users' => User::all()])->name('staff');
    Route::view('documentation', 'documentation');
    Route::view('logs', 'logs');

    Route::get('test2', function () {
        $roles = Role::paginate();
        $permissions = Permission::all();
        return view('test2', compact('roles', 'permissions'));
    });
});
