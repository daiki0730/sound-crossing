<?php


Route::namespace('Frontend')->name('frontend.')->group(function () {
  Route::get('/', 'UserController@index')->name('user');
});


