<?php

use Illuminate\Support\Facades\Route;


Route::group(["prefix"=>"admin"], function() {
    Route::get("/books", "BooksController@index");
    Route::get("/members", "MembersController@index");
    Route::get("/useradmin", "UserAdminController@index");
    Route::get("/transactions", "TransactionsController@index");
    Route::get("/books_categories", "BookCategoriesController@index");
    Route::get("/transactiondetails", "TransactionDetailsController@index");
    Route::get("/books/add", "BooksController@add");
    Route::get("/members/add", "MembersController@add");
    Route::get("/useradmin/add", "UserAdminController@add");
    Route::get("/transactions/add", "TransactionsController@add");
    Route::get("/bookscategories/add", "BookCategoriesController@add");
    Route::get("/transactiondetails/add", "TransactionDetailsController@add");
    Route::get("/books/edit", "BooksController@edit");
    Route::get("/members/edit", "MembersController@edit");
    Route::get("/useradmin/edit", "UserAdminController@edit");
    Route::get("/transactions/edit", "TransactionsController@edit");
    Route::get("/bookscategories/edit", "BookCategoriesController@edit");
    Route::get("/transactiondetails/edit", "TransactionDetailsController@edit");
    Route::get("/books/delete", "BooksController@delete");
    Route::get("/members/delete", "MembersController@delete");
    Route::get("/useradmin/delete", "UserAdminController@delete");
    Route::get("/transactions/delete", "TransactionsController@delete");
    Route::get("/bookscategories/delete", "BookCategoriesController@delete");
    Route::get("/transactiondetails/delete", "TransactionDetailsController@delete");
    Route::get("/books/detail", "BooksController@detail");
    Route::get("/members/detail", "MembersController@detail");
    Route::get("/useradmin/detail", "UserAdminController@detail");
    Route::get("/transactions/detail", "TransactionsController@detail");
    Route::get("/bookscategories/detail", "BookCategoriesController@detail");
    Route::get("/transactiondetails/detail", "TransactionDetailsController@detail");
    Route::get("/dashboard", "Backend\DashboardController@index");
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
Route::post("books","BooksController@books");



