<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;


Route::view('/', 'welcome');

Route::group(['middleware' => 'guest'], function () {

    Route::get('login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('register', function () {
        return view('auth.register');
    })->name('register');
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

    Route::get('invoice', function () {
        return view('invoice');
    });

    Route::get('manage-roles', function () {
        $users = User::all();
        return view('manage-roles', compact('users'));
    });
    Route::get('staff', function () {
        $users = User::paginate(12);
        return view('staff.index', compact('users'));
    })->name('staff');

    Route::get('users', function () {
        return User::all();
    });

    Route::view('documentation', 'documentation');
    Route::view('logs', 'logs');

    Route::get('test2', function () {
        $roles = Role::paginate();
        $permissions = Permission::all();
        return view('test2', compact('roles', 'permissions'));
    });
});
