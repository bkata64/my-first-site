<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello-api', function () {
    return "Hello API !";
});

Route::get('/request-test-api', function () {
    return [
        'title' => request('title'),
        // példa: http://127.0.0.1:8000/api/request-test-api?title=MyFirstTitle
    ];
});
