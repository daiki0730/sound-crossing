<?php

/**
 * backend routes
 */


use Illuminate\Routing\Route;
Route::namespace('Backend')->prefix('admin')->name('backend.admin.')->group(function () {
  Route::resource('users', 'UserController');
});
