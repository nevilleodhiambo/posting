<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ConversationController;
// use App\Http\Controllers\Auth\LogoutCOntroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
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

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/', 'index')->name('index');
    Route::get('/do', 'do')->name('do');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/portofolio', 'portofolio')->name('portofolio');
    Route::get('/applicants', 'applicants')->name('myapplicants');
});



Route::controller(AccountController::class)->group(function(){
    Route::get('/choose', 'choose')->name('choose');

});

Route::middleware(['auth'])->group(function () {
    

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    Route::controller(AccountController::class)->group(function (){
        // Route::get('/choose', 'choose')->name('choose');
        Route::get('/seeker', 'seeker')->name('seeker');
        Route::get('/employer', 'employer')->name('employer');
    });

    Route::controller(RegisterController::class)->group(function (){
        Route::get('/seeker/work-details', 'work')->name('work');
        Route::post('qualification', 'storequalification')->name('qualification');
        Route::get('employer/company', 'company');
        Route::get('job/seekers', 'display')->name('jobseekers');
        // Route::get('employer', 'employer')->name('register/employer');
    });

    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard/seeker', 'seeker')->name('dashboard/seeker');
        Route::get('dashboard/employer', 'employer')->name('dashboard/employer');
    });

    Route::controller(EmployerController::class)->group(function(){
        Route::get('employers/index', 'index')->name('employers.index');
    });
    // Route::get('employer/{id}', [EmployerController::class, 'status']);


    Route::get('seeker', [App\Http\Controllers\RegisterController::class, 'store'])->name('store');
    // Route::get('employer', [App\Http\Controllers\RegisterController::class, 'employer'])->name('register.employer');

    Route::resource('jobs', JobController::class);

    Route::get('job/listing', [JobController::class, 'listing'])->name('alljobs');

    Route::get('/job-listings', 'JobListingController@index')->name('job-listings.index');
    Route::resource('profile', ProfileController::class);


    Route::patch('/admin/job-listings/{id}/approve', 'App\Http\Controllers\DashboardController@approveJobListing')->name('admin.job-listings.approve');
    Route::patch('/admin/job-listings/{id}/reject', 'App\Http\Controllers\DashboardController@rejectJobListing')->name('admin.job-listings.reject');

    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/{edit}', [RolesController::class, 'edit'])->name('role.edit');
    Route::put('/roles/{update}', [RolesController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{destroy}', [RolesController::class, 'destroy'])->name('role.destroy');

    Route::resource('application', ApplicationController::class);
    Route::get('apply/job/{joblisting_id}', [ApplicationController::class, 'create'])->name('application.apply');

    Route::patch('/admin/company/{id}/enable', 'App\Http\Controllers\EmployerController@enablecompany')->name('admin.company.enable');
    Route::patch('/admin/company/{id}/disable', 'App\Http\Controllers\EmployerController@disablecompany')->name('admin.company.disable');

   
 Route::controller(MessageController::class)->group(function (){
        Route::get('conversations/{conversations}/messages', 'index')->name('message.index');
        // Route::get('message/{message}', 'show')->name('message.show');
        Route::post('conversations/conversations/{messages}', 'store')->name('messages.store');
    });

    // Route::controller(ConversationController::class)->group(function(){
    //     Route::get('conversations', 'index')->name('conversations.index');
    //     Route::get('conversations/{conversation}', 'show')->name('conversations.show');
    //     Route::post('conversations', 'store')->name('conversations.store');
    // });
    Route::resource('conversations', ConversationController::class);

    Route::resource('message', MessageController::class);
});

Route::get('/logout', [LogoutController::class, 'logout'])->name('custom.logout');


Route::controller(AccountController::class)->group(function (){
    Route::get('/login', 'loginchoose')->name('loginchoose');
    Route::get('/seeker', 'seeker')->name('seeker');
});

Route::controller(RegisterController::class)->group(function (){
    Route::get('/employer/sign-up', 'employer')->name('register.employer');
    Route::get('/seeker/sign-up', 'seeker')->name('register.seeker');
    Route::post('seeker/save', 'store')->name('store');
    Route::post('employer/save', 'stremployer')->name('stremployer');
    Route::get('employer/company', 'company');
    // Route::get('employer', 'employer')->name('register/employer');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('my/login', 'seekerlogin')->name('seeklogin');
    Route::post('seeker/login', 'sklogin')->name('seekerlogin');

    Route::get('employer/login', 'employerlogin')->name('employer');
    Route::post('employer/login', 'emplogin')->name('emplogin');
    // Route::get('employer/logout', 'logout')->name('login');
});


