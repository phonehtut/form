<?php

use App\Livewire\Meeting\Form;
use Illuminate\Support\Facades\Route;

Route::get('/', Form::class)->name('home');
