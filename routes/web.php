<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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


Route::group(['middleware'=> 'auth'],function(){
    Route::get('/',function(){
        return redirect('/dashboard');
    });

    //Dashboard Menu
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::post('/tabledashboard',[DashboardController::class,'getDataDashboard'])->name('dataDashboard');

    //History Menu
    Route::get('/historyinput',[HistoryController::class,'indexInputData'])->name('historyInputData');
    Route::get('/historysent',[HistoryController::class,'indexSentWasis'])->name('historySentWasis');
    //---List Data History Input Data
    Route::post('/history/getdatasurveyuser',[HistoryController::class,'getDataSurveyUser'])->name('getDataSurvey');
    Route::get('/history/getalldata',[HistoryController::class,'getAllData'])->name('getAllDataExcel');
    //---Data Foto User History Input Data
    Route::post('/history/getdatafotouser', [HistoryController::class,'getDataFotoUser'])->name('getDataFotoUser');
    Route::put('/history/uploadfotouser/{id}',[HistoryController::class,'putUploadFoto'])->name('uploadFotoUser');

    //Pembesarab Menu
    Route::get('/tables', function () {
        return view('tables');
    })->name('tables')->middleware('auth');
});

Route::get('/tables', function () {
    return view('tables');
})->name('tables')->middleware('auth');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet')->middleware('auth');

Route::get('/RTL', function () {
    return view('RTL');
})->name('RTL')->middleware('auth');

Route::get('/profile', function () {
    return view('account-pages.profile');
})->name('profile')->middleware('auth');

Route::get('/signin', function () {
    return view('account-pages.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('account-pages.signup');
})->name('signup')->middleware('guest');

Route::get('/sign-up', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('sign-up');

Route::post('/sign-up', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/sign-in', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('sign-in');

Route::post('/sign-in', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');

Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');
