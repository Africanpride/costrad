<?php

use App\Models\User;
use App\Models\Patient;
use App\Models\Institute;
use App\Models\Insurance;
use App\Models\Treatment;
use App\Models\Appointment;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\DisplayInstituteController;

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

Route::get('auth/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);
Route::view('test4', 'test4');
Route::view('terms', 'terms');
Route::view('privacy', 'privacy');
Route::view('about', 'about');
Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('our-process', 'our-process');
Route::view('institutes', 'institutes'); // front end institute

// display a particular institute using slug as parameter for the flrontend
Route::get('/institutes/{slug}', [DisplayInstituteController::class, 'show'])->name('institute.show');


Route::post('contact', ContactController::class)->name('contact-form');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::resource('institutes', InstituteController::class);
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('admin/participants/index', function () {
        return view('admin/participants/index');
    });
});

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::middleware([])->prefix('admin')->group(function () {

        Route::get('settings', function () {
            return view('admin.settings');
        })->name('admin.settings');

        Route::get('media', function () {
            return view('admin.media');
        })->name('admin.media');

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });
    Route::get('/profile', function () {
        return view('profile.show');
    });

    Route::get('/doctor', function () {
        return view('doctor.index');
    })->name('doctor');

    Route::view('/powergrid', 'powergrid-demo');


    Route::get('invoice', function () {
        return view('invoice');
    });

    Route::get('manage-roles', function () {
        $users = User::all();
        return view('manage-roles', compact('users'));
    });

    Route::get('staff', function () {
        $users = User::paginate(8);
        return view('staff.index', compact('users'));
    })->name('staff');


    Route::get('users', function () {
        return User::all()->toJson();
    });

    Route::view('documentation', 'documentation');
    Route::view('logs', 'logs');


    Route::get('test3', function () {
        $roles = Role::paginate();
        $permissions = Permission::all();
        return view('test3', compact('roles', 'permissions'));
    });

    Route::get('/inactive', function () {
        return view('inactive');
    })->name('inactive');
    Route::get('trim', function () {
        return Str::of('/Laravel/')->ltrim('/');
    });
});
