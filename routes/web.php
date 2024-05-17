<?php

use App\Http\Controllers\StubsController;
use Illuminate\Support\Facades\Route;

Route::get('stubs/generate', [StubsController::class, 'generate']);
