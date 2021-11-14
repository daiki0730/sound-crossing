<?php

/**
 * backend routes
 */

use Illuminate\Support\Facades\Route;
Route::namespace('Backend')->prefix('admin')->name('backend.admin.')->group(function () {
  Route::resource('users', 'UserController');
});
