<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// added by temples-dev
Route::get('/admin', function () {
    return view('dashboard.main-content');
})->name('index');

Route::get('/admin/buttons', function () {
    return view('dashboard.buttons');
})->name('buttons');

Route::get('/admin/cards', function () {
    return view('dashboard.cards');
})->name('cards');

Route::get('/admin/charts', function () {
    return view('dashboard.charts');
})->name('charts');

Route::get('/admin/forms', function () {
    return view('dashboard.forms');
})->name('forms');

Route::get('/admin/modals', function () {
    return view('dashboard.modals');
})->name('modals');

Route::get('/admin/tables', function () {
    return view('dashboard.tables');
})->name('tables');


// added admin login and signup routes


Route::get('/admin/login', function () {
    return view('dashboard.pages.login');
})->name('login');

Route::get('/admin/signup', function () {
    return view('dashboard.pages.signup');
})->name('signup');


// ends here

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
