<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::group([
    'namespace'=> '\App\Http\Controllers',
    'prefix'=>'tasks',
    'as'=>'tasks.'
],function (){
    Route::get('/','TaskController@index')->name('index');
    Route::get('/{task}','TaskController@show')->name('show');
    Route::post('/','TaskController@store')->name('store');
    Route::put('/{task}','TaskController@update')->name('update');
    Route::delete('/{task}','TaskController@destroy')->name('destroy');

});
