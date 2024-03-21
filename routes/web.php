<?php

use Illuminate\Support\Facades\Route;
use App\Models\QuibblerPost;

Route::get('/', function () {
    return view('welcome');
})->middleware('web');

Route::get('blog/{quibbler_post:url}', function (QuibblerPost $quibbler_post) {
    return view('show-quibbler-post', compact('quibbler_post'));
})
    ->where([
        'quibbler_post' => '.+',
    ])
    ->middleware('web');
