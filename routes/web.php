<?php

use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Courses;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/courses', [DashboardController::class, 'coursesPage'])->name('courses');
    Route::get('/students', [DashboardController::class, 'studentsPage'])->name('students');
    Route::get('/enrolled', [DashboardController::class, 'studentsEnrolledPage'])->name('enrolled');

});

// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });