<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DisplayInstituteController;

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();
});

Route::get('auth/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);
Route::view('test4', 'test4');
Route::view('test', 'test');
Route::view('terms', 'terms');
Route::view('help', 'help');
Route::view('privacy', 'privacy');
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('our-process', 'our-process');
Route::view('institutes', 'institutes'); // front end institute

Route::get('/', function() {
    return view('home');
})->name('home');


// Route::get('test5', function() {
//     $response = Http::get("https://restcountries.com/v3.1/name/peru");
//     $data = $response->json();
//    return $flagUrl = $data[0]['flag'];
// });

Route::get('test3', function () {
    $roles = Role::paginate();
    $permissions = Permission::all();
    return view('test3', compact('roles', 'permissions'));
});

// display a particular institute using slug as parameter for the flrontend
Route::get('/institutes/{slug}', [DisplayInstituteController::class, 'show'])->name('institute.show');
Route::post('contact', ContactController::class)->name('contact-form');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



// Participants and Everyone else  Routes
Route::middleware(['auth', config('jetstream.auth_session')])->group(function () {

    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile.show');
    });

});


// Admin Routes
Route::middleware(['auth', config('jetstream.auth_session')])->prefix('admin')->group(function () {

    Route::get('participants/', function () {
        $participants = User::participant()->get();
        return view('admin/participants/index', compact('participants'));
    })->name('admin.participants');

    Route::resource('institutes', InstituteController::class);
    Route::resource('announcements', AnnouncementController::class);

    Route::get('calender', function () {
        return view('admin.calender');
    })->name('calender');

    Route::get('settings', function () {
        return view('admin.settings');
    })->name('admin.settings');

    Route::get('media', function () {
        return view('admin.media');
    })->name('admin.media');

    Route::get('dashboard', function () {
        $latest = User::take(4)->orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('latest'));
    })->name('admin.dashboard');

    Route::get('manage-roles', function () {
        $users = User::all();
        return view('manage-roles', compact('users'));
    })->name('admin.manage-roles');

    Route::view('logs', 'logs');

    Route::get('staff', function () {
        $users = User::paginate(8);
        return view('staff.index', compact('users'));
    })->name('staff');

});



    Route::get('/doctor', function () {
        return view('doctor.index');
    })->name('doctor');

    Route::view('/powergrid', 'powergrid-demo');


    Route::get('invoice', function () {
        return view('invoice');
    });





