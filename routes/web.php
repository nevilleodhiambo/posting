<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WebsiteController;

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

// Route::get('/', function () {
//     return view('login/home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(WebsiteController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/', 'index')->name('index');
    Route::get('/do', 'do')->name('do');
    Route::get('/contact', 'about')->name('contact');
    Route::get('/portofolio', 'portofolio')->name('portofolio');
});

Route::controller(AccountController::class)->group(function (){
    Route::get('/choose', 'choose')->name('choose');
    Route::get('/login', 'loginchoose')->name('loginchoose');
    Route::get('/seeker', 'seeker')->name('seeker');
    Route::get('/employer', 'employer')->name('employer');
    Route::get('/seeker/sign', 'signseeker')->name('seeker.sign');
});

Route::controller(RegisterController::class)->group(function (){
    Route::get('/employer/sign-up', 'employer')->name('register.employer');
    Route::get('/seeker/work-details', 'work')->name('work');
    Route::get('/seeker/sign-up', 'seeker')->name('register.seeker');
    Route::post('qualification', 'storequalification')->name('qualification');
    Route::post('seeker/save', 'store')->name('store');
    Route::post('employer/save', 'stremployer')->name('stremployer');
    Route::get('employer/company', 'company');
    // Route::get('employer', 'employer')->name('register/employer');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('seeker/login', 'seekerlogin')->name('seeklogin');
    Route::post('seeker/login', 'sklogin')->name('seekerlogin');

    Route::get('employer/login', 'employerlogin')->name('employer');
    Route::post('employer/login', 'emplogin')->name('emplogin');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('dashboard/seeker', 'seeker')->name('dashboard/seeker');
    Route::get('dashboard/employer', 'employer')->name('dashboard/employer');
});

Route::get('seeker', [App\Http\Controllers\RegisterController::class, 'store'])->name('store');
// Route::get('employer', [App\Http\Controllers\RegisterController::class, 'employer'])->name('register.employer');

Route::resource('jobs', JobController::class);