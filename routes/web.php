<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PembesaranController;
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

Route::get('/',function(){
    return redirect('/sign-in');
});

Route::group(['middleware'=> 'auth'],function(){
    Route::group(['middleware' => 'role:Surveyor,Admin'],function(){

        //Dashboard Menu
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::post('/tabledashboard',[DashboardController::class,'getDataDashboard'])->name('dashboard.listdata');
        Route::post('/dashboard/deletedata', [DashboardController::class,'deleteDashboard'])->name('dashboard.deletedata');

        //History Menu
        Route::get('/historyinput',[HistoryController::class,'indexInputData'])->name('historyinput');
        Route::get('/historysent',[HistoryController::class,'indexSentWasis'])->name('historysendwasis');
        //---List Data History Input Data
        Route::post('/historyinput/getdatasurveyuser',[HistoryController::class,'getDataSurveyUser'])->name('historyinput.listdata');
        Route::get('/historyinput/getalldata',[HistoryController::class,'getAllData'])->name('historyinput.download');
        //---Data Foto User History Data
        Route::post('/history/getdatafotouser', [HistoryController::class,'getDataFotoUser'])->name('history.datafoto');
        Route::put('/history/uploadfotouser/{id}',[HistoryController::class,'putUploadFoto'])->name('history.uploadfoto');
        Route::post('/history/deletedata',[HistoryController::class,'deleteData'])->name('history.deletedata');
        //---Check Wasis
        Route::get('/historyinput/checkwasis/check/{id}',[HistoryController::class,'getIndexCheckWasis'])->name('history.checkwasis');
        Route::post('/historyinput/checkwasis/send/{id}',[HistoryController::class,'sendWasis'])->name('history.sendwasis');
        Route::get('/historyinput/checkwasis/edit/{state}/{id}',[HistoryController::class,'getIndexEditWasis'])->name('history.editwasis');
        Route::post('/historyinput/checkwasis/save/{id}', [HistoryController::class,'saveEditWasis'])->name('editwasis.save');
        //-----List Data History Wasis
        Route::post('/historywasis/getdatawasis',[HistoryController::class,'getDataWasis'])->name('historywasis.listdata');

        //Pembesaran Menu
        Route::get('/pembesaran',[PembesaranController::class,'index'])->name('pembesaran');
        Route::post('/surveyexcel',[PembesaranController::class,'tambahSurvey'])->name('pembesaran.addsurvey');
        Route::post('/savesurvey',[PembesaranController::class,'saveHasilSurvey'])->name('pembesaran.savesurvey');

        //Presensi Menu
        Route::get('/presensi',[PresensiController::class,'index'])->name('presensi');
        Route::post('/presensi/saveabsen',[PresensiController::class,'saveAbsen'])->name('presensi.save');
    });
    Route::group(['middleware'=>'role:Admin'],function(){

        Route::get('/management',[UserController::class,'index'])->name('management');
        Route::post('/management/table',[UserController::class,'getDataManagement'])->name('management.listdata');
        //--- User Detail
        Route::post('/management/get',[UserController::class,'getDataUser'])->name('management.datauser');
        Route::post('/management/delete/{id}',[UserController::class,'deleteUser'])->name('management.delete');
        Route::put('/management/update/{id}',[UserController::class,'updateUser'])->name('management.update');
        Route::get('/management/add',[UserController::class,'addMember'])->name('management.add');
        Route::post('/management/save',[UserController::class,'saveMember'])->name('management.save');

    });
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

// Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
// Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth');
// Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');
