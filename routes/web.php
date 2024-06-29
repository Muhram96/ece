<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/cms-gallery',[App\Http\Controllers\HomeController::class,'CmsGallery'])->name('cms-gallery');
    Route::get('/faculty-pro',[App\Http\Controllers\HomeController::class,'CmsFaculty'])->name('faculty-pro');
    Route::get('/admission',[App\Http\Controllers\HomeController::class,'CmsAdmission'])->name('admission');
    Route::get('/contacts/{id}/edit', [App\Http\Controllers\HomeController::class, 'Contactedit'])->name('contact-edit');
    Route::delete('/contacts/{id}/delete', [App\Http\Controllers\HomeController::class, 'Contactdestroy'])->name('contact-delete');
    Route::get('/faculty-create', [App\Http\Controllers\HomeController::class, 'facultyCreate'])->name('faculty-create');
    Route::POST('/faculty-store', [App\Http\Controllers\HomeController::class, 'facultyStore'])->name('faculty-store');
    Route::get('/profile/{id}/edit', [App\Http\Controllers\HomeController::class, 'Profileedit'])->name('profile-edit');
    Route::delete('/profile/{id}/delete', [App\Http\Controllers\HomeController::class, 'Profiledestroy'])->name('profile-delete');
    Route::put('/faculty/{id}', [App\Http\Controllers\HomeController::class, 'facultyupdate'])->name('faculty-update');
    Route::get('/gallery-create', [App\Http\Controllers\HomeController::class, 'GalleryCreate'])->name('gallery-create');
    Route::POST('/gallery-store', [App\Http\Controllers\HomeController::class, 'GalleryStore'])->name('gallery-store');
    Route::delete('/gallery/{id}/delete', [App\Http\Controllers\HomeController::class, 'Gallerydestroy'])->name('gallery-delete');
});
Route::get('/gallery',[App\Http\Controllers\HomeController::class,'gallery'])->name('gallery');
Route::get('/faculty',[App\Http\Controllers\HomeController::class,'faculty'])->name('faculty');
Route::get('/fee-structure',[App\Http\Controllers\HomeController::class,'feeStructure'])->name('fee-structure');
Route::get('/contact-us',[App\Http\Controllers\HomeController::class,'contactus'])->name('contact-us');
Route::POST('/contact-store',[App\Http\Controllers\HomeController::class,'contactmessage'])->name('contact-store');
