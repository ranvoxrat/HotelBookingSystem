<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
// Rename the logout route to have a unique name
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login'); 
})->name('custom.logout');

// Your other routes remain unchanged
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/table', [RegistrationController::class, 'showRegistration'])->name('table')->middleware('auth'); 
Route::post('/register', [RegistrationController::class, 'store'])->name('store');
Route::get('/registration', function () {
    return view('registration');
})->name('registration')->middleware('auth'); ;