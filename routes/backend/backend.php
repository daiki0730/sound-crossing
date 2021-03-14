<?php

Route::namespace('Backend')->prefix('admin')->name('backend.')->group(function () {
  Route::get('/', 'AdminController@index')->name('admin');
});