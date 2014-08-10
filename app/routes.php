<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', function () {
    return View::make('home');
});

Route::get('installation', [
    'as' => 'installation',
    function () {
        return View::make('installation');
    }
]);

Route::get('base-css', [
    'as' => 'css',
    function () {
        return View::make('css');
    }
]);

Route::get('migration', [
    'as' => 'migration',
    function () {
        return View::make('migration');
    }
]);

Route::get('components', [
    'as' => 'components',
    function () {
        return View::make('components');
    }
]);

Route::get('extras', [
    'as' => 'extras',
    function () {
        return View::make('extras');
    }
]);
