<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentViewSheduleController;
use App\Http\Controllers\AgentAddRouteController;
use App\Http\Controllers\AdminBusManageController;
use App\Http\Controllers\AddBusController;
use App\Http\Controllers\BusSearchController;
use App\Http\Controllers\PassengerIndexController;
use App\Http\Controllers\PassengerInfoController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminRouteController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\PDFController;






Route::get('/g', function () {
    return view('HomePage.faq');
});
Route::get('/b', function () {
    return view('HomePage.aboutus');
});
//home page
Route::get('/ajax-autocomplete-search', [PassengerIndexController::class, 'selectSearch']);
Route::get('/ajax-autocomplete-searchtwo', [PassengerIndexController::class, 'selectSearchtwo']);
Route::get('/', [PassengerIndexController::class, 'index']);

//Login page
Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');


});
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

//forget password page
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('addbus/{id}', [AddBusController::class,'index']);
Route::post('agentaddbus',[AddBusController::class,'agentbusstore']);

Route::get('/addbusroute/{id}', [AgentAddRouteController::class,'index']);
Route::post('AgentaddRoute',[AgentAddRouteController::class,'agentRoutestore']);

Route::resource('adminroute', AdminRouteController::class);
Route::resource('adminbusmanage', AdminBusManageController::class);

Route::post('searchbus',[BusSearchController::class,'find']);
Route::resource('ErrorMessage', BusSearchController::class);

Route::get('/viewshedule/{id}', [AgentViewSheduleController::class,'index']);
Route::get('/showupdate/{id}', [AgentViewSheduleController::class,'showdata']);
Route::post('updateshedule',[AgentViewSheduleController::class,'updatestore']);
Route::get('/delete/{id}', [AgentViewSheduleController::class,'destroy']);
Route::get('/seat/{id}', [AgentViewSheduleController::class,'seatview']);
Route::post('AgentSeat',[AgentViewSheduleController::class,'SeatStore']);
Route::get('resetSeat/{id}', [AgentViewSheduleController::class,'reset']);

Route::get('/seatbooking/{id}', [SeatController::class,'seatview']);
Route::post('PassengerBookingSeat',[SeatController::class,'SeatStore']);

Route::post('bookingInfo',[PassengerInfoController::class,'booking']);
Route::post('ticket',[PassengerInfoController::class,'ticketview']);


Route::get('/a', [feedbackController::class, 'index']);
Route::post('feedback', [feedbackController::class, 'feedbackstore']);
Route::get('/message',[feedbackController::class,'showmessage']);

Route::post('create', [PDFController::class, 'index']);








