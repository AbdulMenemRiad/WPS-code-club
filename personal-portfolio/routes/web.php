<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;
use App\Models\Subscriber;



// Contact Form Submission
Route::post('/contact/submit', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    ContactMessage::create($request->all());

    // Send Email Notification
    Mail::raw("New message from {$request->name} ({$request->email}):\n\n{$request->message}", function ($mail) use ($request) {
        $mail->to('abdulmenemriad@gmail.com')
            ->subject('PORTFOLIO: ' . $request->subject);
    });

    return back()->with('success', __('Message sent successfully!'));
});

// Newsletter Submission
Route::post('/subscribe', function (Request $request) {
    $request->validate(['email' => 'required|email|unique:subscribers,email']);

    Subscriber::create(['email' => $request->email]);

    Mail::raw("New newsletter subscriber: {$request->email}", function ($mail) {
        $mail->to('abdulmenemriad@gmail.com')
            ->subject('PORTFOLIO: New Subscriber!');
    });

    return back()->with('success', __('Subscribed successfully!'));
});

// Home Page (Fetches 3 Featured Projects)
Route::get('/', function () {
    // Grabs ALL pinned projects
    $featuredProjects = Project::where('is_featured', true)->get();

    // Grabs ALL pinned blog posts
    $featuredPosts = Post::where('is_featured', true)->get();

    // Passes BOTH to the index view
    return view('index', compact('featuredProjects', 'featuredPosts'));
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

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
});

Route::get('/projects/{slug}', function ($slug) {
    $project = App\Models\Project::where('slug', $slug)->firstOrFail();
    return view('project-detail', compact('project'));
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog/{slug}', function ($slug) {
    $post = App\Models\Post::where('slug', $slug)->firstOrFail();

    return view('post', compact('post'));
});
