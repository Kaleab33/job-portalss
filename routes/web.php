<?php
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', [ Login::class, 'index']) -> name ('login');
