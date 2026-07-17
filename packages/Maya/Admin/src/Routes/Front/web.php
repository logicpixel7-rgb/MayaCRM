<?php

use Illuminate\Support\Facades\Route;
use Maya\Admin\Http\Controllers\Controller;

/**
 * Home routes.
 */
Route::get('/', [Controller::class, 'redirectToLogin'])->name('maya.home');
