<?php

use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'admin.', 'middleware' => 'admin', 'prefix' => 'backend'], static function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::group(['as' => 'ajax.', 'prefix' => 'ajax'], static function () {
        Route::patch('boolean/{id}/change', [AjaxController::class, 'booleanChange'])
            ->name('booleanChange')->where('id', '[0-9]+');
    });

    Route::resource('page', PageController::class);
});

Route::group(['as' => 'front.', 'middleware' => 'front'], static function () {
    Route::get('/', HomeController::class)->name('home');
});
