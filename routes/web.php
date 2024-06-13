<?php

use App\Http\Controllers\singleController1;
use App\Http\Controllers\cmtController1;
use App\Http\Controllers\TestController1;
use App\Http\Controllers\MailController;
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
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin.adminpanel');
});

Route::get('/test1', [TestController1::class, 'ViewContactPage']);

Route::get('/addBlogForm', [TestController1::class, 'addBlogForm'])->middleware('auth');
Route::post('/saveBlogForm', [TestController1::class, 'saveBlogFunc'])->middleware('auth');

Route::get('/showBlogs', [TestController1::class, 'showAllBlogs']);


Route::get('/single1', singleController1::class);
Route::resources(['/cmt' => cmtController1::class,]);

Route::get('/emailsender',  [MailController::class, 'basic_email']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
