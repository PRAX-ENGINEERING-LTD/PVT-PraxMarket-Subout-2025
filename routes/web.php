<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookmarkController;

require __DIR__ . '/auth.php';



Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('network.index'); // Redirect to dashboard if authenticated
    }
    return redirect()->route('bookmark.index'); // Redirect to home.showHomePage if not authenticated
});
Route::resource('bookmark', BookmarkController::class);






