<?php

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
// Predict
Route::get('/', 'MotibetkPredicts@index')->name('home');

Route::any('/{date}/football-and-soccer-predictions', 'MotibetkPredicts@checker')->name('checker');

Route::get('/myartisan', function(){
   try{
    // \Artisan::call('config:clear');
    // sleep(2);
    // \Artisan::call('cache:clear');
    // sleep(2);
    // \Artisan::call('route:clear');
    //   echo "Artisan commands was successful.";
    // \Artisan::call('make:model MFoul -m');
    // sleep(2);
    // \Artisan::call('make:model MShot -m');
    // sleep(2);
    // \Artisan::call('make:model BTTS -mc');
        // \Artisan::call('migrate');
    //   echo "Artisan commands was successful.";
   } catch (Exception $e) {
       echo 'Result: '.$e;
   }
});

