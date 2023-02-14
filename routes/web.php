<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class,'Home']);
Route::post('Logout',[UserAuth::class,'Logout'])->name('Logout');
Route::get('/signup',[UserAuth::class,'Register']);
Route::get('/login',[UserAuth::class,'Login']);
Route::get('/ContactUs',[UserController::class,'ContactUs']);
Route::post('UserAuth',[UserAuth::class,'user_register'])->name('UserAuth');
Route::post('Mail',[UserController::class,'Mail'])->name('Mail');
Route::post('Login',[UserAuth::class,'user_Login'])->name('Login');
Route::get('/SendSolution',[UserController::class,'SendSolution']);
Route::post('/SendSolution',function(){
        $markdown = request('markdown');
        return \Illuminate\Support\Str::of($markdown)->markdown();
});