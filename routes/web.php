<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\LoginController;


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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', function()	{
		   return view('welcome');
	    })->name('welcome');

         Route::get('/about-us', function()	{
            return view('about');
         })->name('about');

         Route::get('/menu', function()	{
            return view('menu');
         })->name('menu');

         Route::get('/meals/{id}', [MealController::class, 'show'])->name('meals.show.client');
         Route::get('/meals/week/{id}', [MealController::class, 'wshow'])->name('meals.wshow.client');

         Route::post('/make-order/{id}', [OrderController::class, 'store'])->name('orders.store');
         Route::post('/make-worder/{id}', [OrderController::class, 'wstore'])->name('orders.wstore');


         Route::get('/contact-us', function()	{
            return view('contact');
         })->name('contact');

         Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

         Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

    });

    Route::prefix('admin')->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Auth::routes();

        Route::middleware('auth')->group(function () {

            Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
            Route::resource('/meals', MealController::class);
            Route::post('/meals/store', [MealController::class, 'wstore'])->name('meals.wstore');
            Route::put('/meals/update/{id}', [MealController::class, 'wupdate'])->name('meals.wupdate');
            Route::delete('/meals/destroy/{id}', [MealController::class, 'wdestroy'])->name('meals.wdestroy');
            Route::resource('/contacts', ContactController::class)->except(['store']);
            Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
            Route::put('/settings/{id}', [SettingController::class, 'update'])->name('settings.update');
            Route::resource('/categories', CategoryController::class);
            Route::resource('/users', UserController::class);
            Route::resource('/chefs', ChefController::class);
            Route::get('/orders/new-orders', [OrderController::class, 'newOrders'])->name('orders.new');
            Route::get('/orders/current-orders', [OrderController::class, 'currentOrders'])->name('orders.current');
            Route::get('/orders/previous-orders', [OrderController::class, 'previousOrders'])->name('orders.previous');
            Route::get('/new-orders/state/{id}/{state}', [OrderController::class, 'updateState'])->name('orders.update');
            Route::delete('/previous-orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
       });
    });


