<?php

/**
 * backend routes
 */
Route::namespace('Backend')->prefix('admin')->name('backend.admin.')->group(function () {
  Route::resource('users', 'UserController');
});
