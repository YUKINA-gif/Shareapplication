<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SharesController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UsersController;

Route::apiResource("/shares",SharesController::class);
Route::post("/signup",[SignupController::class,"post"]);
Route::post("/login", [LoginController::class, "post"]);
Route::get("/user",[UsersController::class,"get"]);
Route::post("/logout",[LogoutController::class,"post"]);
