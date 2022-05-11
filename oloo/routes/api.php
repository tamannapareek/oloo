<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController; 
 
 Route::post('login', [UserController::class, 'login']); 
 Route::post('register', [UserController::class, 'register']); 
 Route::post('complaint', [UserController::class, 'complaint']);  
 Route::post('complaintlist', [UserController::class, 'complaintlist']);  
 Route::group(['middleware' => 'auth:api'], function(){ 
    Route::post('user-details', [UserController::class, 'userDetails']);
});
