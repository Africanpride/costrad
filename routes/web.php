<?php

use App\Models\User;
use App\Models\Patient;
use App\Models\Insurance;
use App\Models\Treatment;
use App\Models\Appointment;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;


Route::view('/', 'welcome');

// Route::group(['middleware' => 'guest'], function () {

//     Route::get('login', function () {
//         return view('auth.login');
//     })->name('login');

//     Route::get('register', function () {
//         return view('auth.register');
//     })->name('register');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/doctor', function () {
        return view('doctor.index');
    })->name('doctor');

    Route::view('/powergrid', 'powergrid-demo');

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
    Route::get('manage-appointment', function () {
        $appointments = Appointment::paginate(10);
        return view('manage-appointment', compact('appointments'));
    });

    Route::get('manage-treatment', function () {
        $treatments = Treatment::paginate(10);
        return view('manage-treatment', compact('treatments'));
    });

    Route::get('staff', function () {
        $users = User::paginate(8);
        return view('staff.index', compact('users'));
    })->name('staff');

    Route::get('patients', function () {
        $patients = Patient::orderBy('id', 'DESC')->paginate(8);
        return view('patients.index', compact('patients'));
    })->name('patients');

    Route::get('insurance', function () {
        $insurances = Insurance::paginate(12);
        return view('insurance.index', compact('insurances'));
    })->name('insurance');

    Route::get('users', function () {
        return User::all();
    });

    Route::view('documentation', 'documentation');
    Route::view('logs', 'logs');

    Route::get('test2', function () {
        $roles = Role::paginate();
        $permissions = Permission::all();
        $patients = Patient::all();
        return view('test2', compact('roles', 'permissions', 'patients'));
    });
    Route::get('test', function () {
        $roles = Role::paginate();
        $permissions = Permission::all();
        $appointments = Patient::all();
        return view('test', compact('roles', 'permissions', 'appointments'));
    });
    Route::get('test3', function () {
        $roles = Role::paginate();
        $permissions = Permission::all();
        return view('test3', compact('roles', 'permissions'));
    });

    Route::get('/inactive', function () {
        return view('inactive');
    })->name('inactive');
    Route::get('trim', function() {
        return Str::of('/Laravel/')->ltrim('/');

    });

});
