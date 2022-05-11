<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminTicketController;
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

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/admin/index', function () {
    return view('admin.layouts.app');
})->name('admin.index')->middleware('admin');;


Route::get('/complain', function () {
    return view('contact');
})->name('complain')->middleware('user');

Route::prefix('admin')->group(function () {
    Route::get('/ticket', [AdminTicketController::class, 'index'])->name('admin.admin.post.index')->middleware('admin');
   
    Route::post('/login',[AdminRegisterController::class, 'loginPost']);
        Route::middleware('guest')->group(function () {
             Route::get('/login',[AdminRegisterController::class, 'login'])->name('admin.login'); 
          
        });
          Route::get('/logout',[AdminRegisterController::class, 'signout'])->name('admin.logout');
});


Route::post('complain',[RegisterController::class, 'complain']);
Route::view('/register',"register")->name('register');
Route::post('/store',[RegisterController::class, 'store']);


Route::name('user.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login',[RegisterController::class, 'login'])->name('login');
    });
    
    Route::post('login',[RegisterController::class, 'loginPost']);
    Route::post('login',[RegisterController::class, 'loginPost']);
    Route::get('/logout',[RegisterController::class, 'logout'])->name('logout');
    Route::get('/ticketlist',[RegisterController::class, 'ticketList'])->name('ticketlist')->middleware('user');
});