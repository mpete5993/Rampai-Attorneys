<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AttorneyController;
use App\Http\Controllers\Admin\PracticeAreaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/dashboard',[WelcomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/attorney/{attorney}', [TeamController::class, 'attorneyShow'])->name('attorney.show');
Route::get('/attorneys', [TeamController::class, 'index'])->name('attorneys.index');
Route::get('/practice-area/{practice_area}', [ServicesController::class, 'practiceAreaShow'])->name('practice_area.show');
Route::get('/practice-areas', [ServicesController::class, 'index'])->name('practice_areas.index');
Route::get('/services', [ServicesController::class, 'services'])->name('services.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/sendEmail', [ContactController::class, 'store'])->name('sendEmail');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::post('/store', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile.show');
Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('profile.edit');

Route::get('/about', function () {
    return view('about');
});

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permission', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/practice-areas', PracticeAreaController::class);
    Route::resource('/attorneys', AttorneyController::class);
    // Route::resource('/posts', PostController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/testimonials', PostController::class);
    Route::resource('/galleries', GalleryController::class);
    Route::resource('/faqs', PostController::class);
});

require __DIR__.'/auth.php';
