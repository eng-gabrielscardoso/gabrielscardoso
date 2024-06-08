<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Projects;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
Route::get('/projects', Projects::class);
