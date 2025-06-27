<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookmarkController;

require __DIR__ . '/auth.php';




Route::resource('bookmark', BookmarkController::class);






