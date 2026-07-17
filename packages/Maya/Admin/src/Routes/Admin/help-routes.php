<?php

use Illuminate\Support\Facades\Route;
use Maya\Admin\Http\Controllers\HelpController;

Route::controller(HelpController::class)->prefix('help')->group(function () {
    Route::get('', 'index')->name('admin.help.index');
});
