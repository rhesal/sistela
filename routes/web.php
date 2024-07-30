<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\StelaController;
use App\Http\Middleware\RedirectIfAuthenticated;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
// Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);

// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
});
// End Group Admin Middleware

// User Group Middleware
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
});

// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {

    // User All Route from Admin
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/user', 'AllUser')->name('all.user');
        Route::get('/add/user', 'AddUser')->name('add.user');
        Route::post('/store/user', 'StoreUser')->name('store.user');
        Route::get('/edit/user/{id}', 'EditUser')->name('edit.user');
        Route::post('/update/user', 'UpdateUser')->name('update.user');
        Route::delete('/delete/user/{id}', 'DeleteUser')->name('delete.user');
        Route::get('/changeStatus', 'changeStatus');
    });

    // Entry Manual All Route from Admin
    Route::controller(StelaController::class)->group(function () {
        Route::get('/all/stela', 'AllStela')->name('all.stela');
        Route::get('/add/stela', 'AddStela')->name('add.stela');
    });
});// End Group Admin Middleware
