<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     // return view('welcome');
//     // return "Hello World!";
//     // return ['foo' => 'bar'];
//     $username = "John";
//     return view('welcome', [
//         'name' => $username
//     ]);
// });

// rövidebben:
Route::view('/', 'welcome', ['name' => 'John']);


// Route::get('/contact', function () {
//     return view('contact');
// });

// Előző helyett rövidebben:
Route::view('/contact', 'contact');

Route::get('/pass-array', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work'
    ];
    $foobar = 'foobar';
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
    ]);
    // return view('tasklist')->withTasks($tasks)->withFoo($foobar);
    // return view('tasklist', [
    //     'tasks' => $tasks
    // ]);
});

Route::get('/request-test', function () {
    return view('request-inputs', [
        'title' => request('title'),
    ]);
});

// Route::get('/posts/{post}', function ($post) {
//     // return $post;
//     return view('post', [
//         'post' => $post,
//     ]);
// });

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//     'first-post' => 'Hello, this is my first blog post!',
//     'second-post' => 'Now I am getting the hang of this blogging thing'
//     ];
//     if ( ! array_key_exists($post, $posts)) {
//         abort(404);
//        }
//     return view('post', [
//     'post' => $posts[$post] ?? 'Nothing here yet.'
//     ]);
//    });

Route::get('posts/{post}', [PostController::class, 'show']);

