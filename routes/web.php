<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Subscriptions\PlanController;
use App\Http\Controllers\Subscriptions\SubscriptionController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionController as ASubscriptionController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Subscriptions'], function () {
    Route::get('/plans', [PlanController::class, 'index'])->name('subscriptions.plans');
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions');
    Route::post('/subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');
});

Route::group(['namespace' => 'Account', 'prefix' => 'account'], function () {
    Route::get('/', [AccountController::class, 'index'])->name('account');

    Route::group(['namespace' => 'Subscriptions', 'prefix' => 'subscriptions'], function () {
        Route::get('/', [ASubscriptionController::class, 'index'])->name('account.subscriptions');
    });
});


