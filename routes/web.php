<?php

Route::get('/', function (){
    return view('welcome');
});

Route::resource('/networks', 'NetworkController');
Route::resource('/combinations', 'CombinationController');
Route::resource('/adspends', 'AdspendController');
