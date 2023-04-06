<?php

use App\Http\Controllers\Admin\AdminAppController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// YAJRA DATATABLES
use App\Http\Controllers\RecordsController;


// COMMON
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminCategoriesController;

// use App\Http\Controllers\Admin\AdminSettingsController;


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

Auth::routes();

/*
|==========================================================================
| Website ROUTES
|==========================================================================
*/
Route::group(['middleware' => ['guest']], function () {

    Route::get('/', [App\Http\Controllers\Website\HomeController::class, 'home'])->name('home');
    Route::get('/{slug}/service/', [App\Http\Controllers\Website\HomeController::class, 'apps'])->name('services');
    Route::get('/{slug}/app/policy', [App\Http\Controllers\Website\HomeController::class, 'appPolicy'])->name('app.policy');
    Route::get('/{slug}/service/detail', [App\Http\Controllers\Website\HomeController::class, 'appDetail'])->name('app.detail');
    Route::get('/contact-us', [App\Http\Controllers\Website\HomeController::class, 'contactUs'])->name('contact.us');
    Route::post('/contact-us', [App\Http\Controllers\Website\HomeController::class, 'contact'])->name('contact');
    Route::post('/subscribe', [App\Http\Controllers\Website\HomeController::class, 'subscribe'])->name('subscribe');
    Route::get('/blogs/list', [App\Http\Controllers\Website\HomeController::class, 'blogs'])->name('blogs.list');
    Route::get('/blog/{slug}', [App\Http\Controllers\Website\HomeController::class, 'blogDetail'])->name('blog.detail');
    Route::get('/about-us', [App\Http\Controllers\Website\HomeController::class, 'aboutUs'])->name('about.us');
});

/*
|==========================================================================
| End Website ROUTES
|==========================================================================
*/

Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


/*
|==========================================================================
| ADMIN ROUTES
|==========================================================================
*/

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // DASHBOARD
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/setting', [AdminDashboardController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminDashboardController::class, 'saveSetting']);
    Route::resource('/users', AdminUsersController::class);


    // CATEGORIES
    Route::resource('/banners', \App\Http\Controllers\Admin\AdminBannerController::class);
    Route::resource('/blogs', \App\Http\Controllers\Admin\AdminBlogController::class);
    Route::resource('/reviews', \App\Http\Controllers\Admin\AdminReviewsController::class);
    Route::resource('/affliate', \App\Http\Controllers\Admin\AdminAffliateController::class);
    Route::resource('/categories', AdminCategoriesController::class);
    Route::resource('/services', AdminAppController::class);
    Route::get('subscriber',[\App\Http\Controllers\Admin\AdminSupportController::class,'subscribers'])->name('subscriber');
    Route::get('contacts',[\App\Http\Controllers\Admin\AdminSupportController::class,'contacts'])->name('contacts');

});

Route::get('category/import', [\App\Http\Controllers\ImportController::class, 'categoryimportForm'])->name('categoryimportForm');
Route::post('category/import', [\App\Http\Controllers\ImportController::class, 'categoryImport'])->name('categoryImport');
  Route::get('mail',function (){
      return view('mail.contact');
  });
