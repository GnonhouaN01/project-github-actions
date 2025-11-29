<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;


// Auth
Route::get("/", [AuthController::class, "showLoginForm"])->name('auth.login');
Route::post("/login", [AuthController::class, "login"]);
Route::get("/register", [AuthController::class, "showRegisterForm"])->name('auth.register');
Route::post("/register", [AuthController::class, "register"]);

// Dashboard
Route::get("/dashboard", function() {
    return view("dashboard");
});

// Books
Route::get("/books", [BookController::class, "index"]);
Route::post("/books", [BookController::class, "store"]);
