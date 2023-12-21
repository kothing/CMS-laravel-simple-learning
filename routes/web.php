<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('users')->group(function () {

    // Login form
    Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware('guest');

    // Logout user
    Route::post('/logout', [UsersController::class, 'logout'])->name('logout')->middleware('auth');

    // Log in user
    Route::post('/authenticate', [UsersController::class, 'authenticate']);
});


Route::prefix('dashboard')->middleware('auth')->group(function () {

    // Admin panel
    Route::get('/', [AdminController::class, 'index'])->name('dashboard.index');

    // Admin panel - posts
    Route::get('/posts', [AdminController::class, 'posts'])->name('dashboard.posts');

    // Admin panel - pages
    Route::get('/pages', [AdminController::class, 'pages'])->name('dashboard.pages');

    // Admin panel - form to edit post
    Route::get('/post/edit/{post:id}', [PostsController::class, 'edit'])->name('posts.edit');

    // Admin panel - form to edit page
    Route::get('/page/edit/{page:id}', [PagesController::class, 'edit'])->name('pages.edit');

    // Admin panel - form to create new post
    Route::get('/post/create', [PostsController::class, 'create'])->name('dashboard.post.create');

    // Admin panel - form to create new page
    Route::get('/page/create', [PagesController::class, 'create'])->name('dashboard.page.create');

    // Admin panel - users
    Route::get('/users', [AdminController::class, 'users'])->name('dashboard.users');

    // Admin panel - form to create new user
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

    // Admin panel - form to edit user
    Route::get('/users/edit/{user:id}', [UsersController::class, 'edit'])->name('users.edit');

    // Admin panel - settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('dashboard.settings');

    // Admin panel - comments
    Route::get('/comments', [AdminController::class, 'comments'])->name('dashboard.comments');

    // Admin panel - form to edit comment
    Route::get('/comment/edit/{comment:id}', [CommentsController::class, 'edit']);

    // Admin panel - about CMS
    Route::get('/about', [AdminController::class, 'about'])->name('dashboard.about');

    // Admin panel - profile
    Route::get('/profile', [UsersController::class, 'profile'])->name('users.profile');
});


// Show all posts
Route::get('/', [PostsController::class, 'index'])->name('posts.index');

// Show single post
Route::get('/{post:slug}', [PostsController::class, 'show'])->name('posts.single');

// Store post data
Route::post('/posts', [PostsController::class, 'store']);

// Update post
Route::put('/posts/{post}', [PostsController::class, 'update']);

// Delete post
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);


// Show single page
Route::get('/page/{page:slug}', [PagesController::class, 'show']);

// Store page data
Route::post('/pages', [PagesController::class, 'store']);

// Update page
Route::put('/pages/{page}', [PagesController::class, 'update']);

// Delete page
Route::delete('/pages/{page}', [PagesController::class, 'destroy']);


// Store user data
Route::post('/users', [UsersController::class, 'store']);

// Update user
Route::put('/users/{user}', [UsersController::class, 'update']);

// Delete user
Route::delete('/users/{user}', [UsersController::class, 'destroy']);


Route::prefix('comment')->group(function () {

    // Store comment
    Route::post('/{post:id}', [CommentsController::class, 'store']);

    // Update comment
    Route::put('/update/{comment:id}', [CommentsController::class, 'update']);

    // Approve comment
    Route::put('/approve/{comment:id}', [CommentsController::class, 'approve']);

    // Delete comment
    Route::delete('/delete/{comment:id}', [CommentsController::class, 'destroy']);
});


// Update settings
Route::put('/settings', [SettingsController::class, 'update']);
