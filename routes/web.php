<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\sit1Controller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\SkilsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::prefix(LaravelLocalization::setLocale())->group(function(){
        Route::get('/', [sit1Controller::class,'Home'])->name('Home');
            Route::prefix('sit1')->name('sit1.')->group(function () {
                Route::get('/master',[sit1Controller::class,'master'])->name('master');
                Route::get('/Home',[sit1Controller::class,'Home'])->name('Home');
                Route::get('/About',[sit1Controller::class,'About'])->name('About');
                Route::get('/Contact',[sit1Controller::class,'Contact'])->name('Contact');
                Route::get('/Resume',[sit1Controller::class,'Resume'])->name('Resume');
                Route::get('/Portfolio',[sit1Controller::class,'Portfolio'])->name('Portfolio');
                Route::post('sendMil',[sit1Controller::class,'sendEmail'])->name('sendEmail');

            });

            // Route::resource('admin', adminController::class)->middleware('auth','cheek_user');

            Route::prefix('admin')->name('admin.')->middleware('auth','cheek_user')->group(function(){

                Route::get('/',[AdminsController::class,'index'])->name('index');
                Route::get('/profile',[AdminsController::class,'profile'])->name('profile');
                Route::post('/profile',[AdminsController::class,'profiledata'])->name('profiledata');
                Route::get('/Home',[AdminsController::class,'Home'])->name('Home');
                Route::post('/Home',[AdminsController::class,'Home_data'])->name('Hom_data');
                Route::get('/About',[AdminsController::class,'About'])->name('About');
                Route::post('/About',[AdminsController::class,'About_data'])->name('About_data');
                Route::get('/Fact',[AdminsController::class,'Fact'])->name('Fact');
                Route::post('/Fact',[AdminsController::class,'Fact_data'])->name('Fact_data');
                Route::resource('Skills', SkilsController::class);
                Route::get('/Resume',[AdminsController::class,'Resume'])->name('Resume');
                Route::post('/Resume',[AdminsController::class,'Resume_data'])->name('Resume_data');
                Route::resource('Education', EducationController::class);
                Route::resource('Experience', ExperienceController::class);
                Route::resource('Portfolio', PortfolioController::class);
                Route::get('/Contact',[AdminsController::class,'Contact'])->name('Contact');
                Route::post('/Contact',[AdminsController::class,'Contact_data'])->name('Contact_data');
                Route::resource('users', UsersController::class);
                Route::get('/registerr', [HomeController::class, 'registerr'])->name('registerr');

            });
            Route::get('/home', [HomeController::class, 'index'])->name('home');
            Auth::routes();
            Route::view('not-allowed','not-allowed');

  });


