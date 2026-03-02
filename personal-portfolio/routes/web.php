<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Post;

// Home Page (Fetches 3 Featured Projects)
Route::get('/', function () {
    $featuredProjects = Project::where('is_featured', true)->take(3)->get();
    return view('index', compact('featuredProjects'));
});

// About & Experience Page
Route::get('/about', function () {
    $experiences = Experience::orderBy('start_date', 'desc')->get();
    return view('about', compact('experiences'));
});

// Portfolio / Projects Page
Route::get('/projects', function () {
    $projects = Project::orderBy('created_at', 'desc')->get();
    return view('projects', compact('projects'));
});

// Certificates Vault Page
Route::get('/certificates', function () {
    $certificates = Certificate::orderBy('date_earned', 'desc')->get();
    return view('certificates', compact('certificates'));
});

// Blog Page
Route::get('/blog', function () {
    $posts = Post::orderBy('published_at', 'desc')->get();
    return view('blog', compact('posts'));
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog/{slug}', function ($slug) {
    $post = App\Models\Post::where('slug', $slug)->firstOrFail();

    return view('post', compact('post'));
});
