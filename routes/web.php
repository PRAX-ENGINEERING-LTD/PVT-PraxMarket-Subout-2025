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
Route::GET('/get-bookmarked-companies', [BookmarkController::class, 'getBookmarkedCompanies'])->name('bookmark.getBookmarkedCompanies');
Route::GET('/get-approved-suppliers', [BookmarkController::class, 'getApprovedSuppliers'])->name('bookmark.getApprovedSuppliers');
Route::GET('/get-recomended-suppliers', [BookmarkController::class, 'getRecomendedSuppliers'])->name('bookmark.getRecomendedSuppliers');
Route::GET('/get-selected-suppliers', [BookmarkController::class, 'getSelectedSuppliers'])->name('bookmark.getSelectedSuppliers');
Route::GET('/get-bookmark-ads', [BookmarkController::class, 'getBookmarkAds'])->name('bookmark.getBookmarkAds');
Route::POST('/add-new-bookmark-folder', [BookmarkController::class, 'addNewBookmarkFolder'])->name('bookmark.addNewBookmarkFolder');
Route::POST('/update-bookmark-folder', [BookmarkController::class, 'updateBookmarkFolder'])->name('bookmark.updateBookmarkFolder');
// Route::POST('/add-new-bookmark-folder', [BookmarkController::class, 'addNewBookmarkFolder'])->name('bookmark.addNewBookmarkFolder');
Route::POST('/delete-bookmark-folder', [BookmarkController::class, 'deleteBookmarkFolder'])->name('bookmark.deleteBookmarkFolder');
Route::GET('/get-available-custom-bookmark-folder-apis', [BookmarkController::class, 'getAvailableCustomBookmarkApis'])->name('bookmark.getAvailableCustomBookmarkApis');
Route::GET('/get-custom-bookmark-folder-details/{folderID}', [BookmarkController::class, 'getCustomBookmarkFolderDetails'])->name('bookmark.getCustomBookmarkFolderDetails');
Route::GET('/remove-from-folder/{fromFolder}/{companyID}', [BookmarkController::class, 'removeFromFolder'])->name('bookmark.removeFromFolder');
Route::GET('/move-from-folder/{toFolder}/{fromFolder}/{companyID}', [BookmarkController::class, 'moveFolder'])->name('bookmark.moveFolder');








