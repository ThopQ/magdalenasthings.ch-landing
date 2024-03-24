<?php

use App\Livewire\DataProtection;
use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;
use App\Livewire\Impressum;
use App\Models\QuibblerPost;

Route::get('/', Welcome::class)->name('welcome');

Route::get('/impressum', Impressum::class)->name('impressum');
Route::get('/datenschutzerklaerung', DataProtection::class)->name('data-protection');

Route::get('blog/{quibbler_post:url}', function (QuibblerPost $quibbler_post) {
    return view('show-quibbler-post', compact('quibbler_post'));
})
    ->where([
        'quibbler_post' => '.+',
    ])
    ->middleware('web');
