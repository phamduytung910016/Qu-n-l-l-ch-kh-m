<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Models\ScheduleModel;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('login');
});
Route::post('/postLogin', [UserController::class, 'postLogin']);
Route::get('/getRegister', [UserController::class, 'getRegister']);
Route::post('/postRegister', [UserController::class, 'postRegister']);

Route::middleware('LoginMiddle')->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/getLogOut', [UserController::class, 'logOut']);
        Route::get('/appointments', [UserController::class, 'listAppointments'])->name('list_appointments');
        Route::get('/getDetail/{id}', [ScheduleController::class, 'getDetail']);
        Route::get('/profile', [UserController::class, 'profile']);
        Route::get('/edit', [UserController::class, 'edit']);
    });

    Route::prefix('user')->group(function () {
        Route::get('/get_register_schedule', [ScheduleController::class, 'getRegisterSchedule']);
        Route::get('/sendmail', [MailController::class, 'sendMail']);
        Route::post('/post_register_schedule', [ScheduleController::class, 'postRegisterSchedule']);
        Route::get('/detail', [ScheduleController::class, 'detail']);
        Route::get('/listAppointments', [ScheduleController::class, 'list']);
        Route::get('/getDetail/{id}', [ScheduleController::class, 'getDetail']);
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/edit', [UserController::class, 'edit']);
    });
});

Route::get('/test', [UserController::class, 'test']);
