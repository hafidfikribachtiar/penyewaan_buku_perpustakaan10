<?php

use Illuminate\Support\Facades\Route;


Route::group(["prefix"=>"admin"], function() {
    Route::group(["prefix"=>"auth"], function() {
        Route::get("login","Backend\Auth\AuthController@getLogin");
        Route::post("login","Backend\Auth\AuthController@postLogin");
    });

    Route::group(["middleware"=>[\App\Http\Middleware\AdminMiddleware::class]], function() {
        Route::get("/app", "Backend\Auth\AuthController@app");
        Route::get("/logout", "Backend\Auth\AuthController@getLogout")->name('logout');
    });
});

// Route::resource('books','BooksController');
// Route::get('/books', 'BooksController@books');
Route::get("/dashboard", "Backend\DashboardController@dashboard");
Route::get("/books", "BooksController@books");
Route::post("books","BooksController@books");



