<?php

Route::namespace('Backend')->prefix('admin')->name('backend.admin.')->group(function () {
  Route::resource('/', 'AdminController');
});
