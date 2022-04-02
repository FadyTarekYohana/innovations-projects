<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [PagesController::class, 'index'] )->name('home');
Route::get('/home', [PagesController::class, 'index'] )->name('home');
Route::get('/student_register', [PagesController::class, 'StudentRegister'] );
Route::get('/instructor_register', [PagesController::class, 'InstructorRegister'] );
Route::get('/login', [PagesController::class, 'login'] );
Route::get('/bundles', [PagesController::class, 'bundles'] );
Route::get('/editProfile', [PagesController::class, 'editProfile'] );
Route::get('/Catigories', [CategoryController::class, 'index'] );
Route::get('/checkout', [PagesController::class, 'checkout'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/articles', [PagesController::class, 'articles'] );

Route::get('/logout', [LoginController::class,'logout']);

Route::get('/redirect/facebook', [SocialController::class, 'redirect']);
Route::get('/callback/facebook', [SocialController::class, 'callback']);

Route::get('/Catigories/{id}' , [CoursesController::class , 'CoursesCategories'] );
Auth::routes(['verify'=> true]);

Route::resource('category','CategoryController');

Route::get('/cart', [CartController::class, 'index'] );

Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){
    Route::get('/dashboard' , [DashboardController::class,'index']);
});


Route::get('/quiz', [StudentController::class, 'quiz'] );
Route::get('/news', [NewsApiController::class, 'showNews'] );
