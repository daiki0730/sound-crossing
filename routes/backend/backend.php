<?php

Route::namespace('Backend')->prefix('admin')->name('backend.')->group(function () {
  Auth::routes();
  Route::get('/', 'AdminController@index')->name('admin');
});