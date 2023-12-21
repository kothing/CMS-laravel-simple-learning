<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use App\Models\Comment;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin panel - show main page
    public function index() {
        return view('dashboard.index', [
            'posts_number' => Post::count(),
            'pages_number' => Page::count(),
            'users_number' => User::count(),
            'comments_number' => Comment::count(),
            'php_version' => phpversion()
        ]);
    }

    // Admin panel - show posts
    public function posts() {
        if(auth()->user()->role == 'ADMIN') {
            return view('dashboard.posts', [
                'posts' => Post::orderBy('title')->get()
            ]);
        }
        else if(auth()->user()->role == 'AUTHOR') {
            return view('dashboard.posts', [
                'posts' => Auth::user()->posts()->orderBy('title')->get()
            ]);
        }
    }

    // Admin panel - show pages
    public function pages() {
        return view('dashboard.pages', [
            'pages' => Page::orderBy('title')->get()
        ]);
    }

    // Admin panel - show users
    public function users() {
        return view('dashboard.users', [
            'users' => User::all()
        ]);
    }

    // Admin panel - settings
    public function settings() {
        return view('dashboard.settings', [
            'settings' => Settings::first()
        ]);
    }

    // Admin panel - comments
    public function comments() {
        return view('dashboard.comments', [
            'comments' => Comment::latest()->get()
        ]);
    }

    // Admin panel - about CMS
    public function about() {
        return view('dashboard.about');
    }
}
