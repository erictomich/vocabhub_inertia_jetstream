<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\SubjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/explore', [SubjectController::class, 'index'])->name('explore');

    Route::get('/mycontent', function () {
        return Inertia::render('MyContent');
    })->name('mycontent');

    Route::get('/vocab', function () {
        return Inertia::render('Vocab');
    })->name('vocab');

    Route::get('/text', function () {
        return Inertia::render('Text');
    })->name('testtext');

    Route::get('/text/{slug}', [TextController::class, 'show'])->name('text');

    Route::get('/texts/{subject_id?}', [TextController::class, 'textsFromSubject'])->name('texts');

    Route::get('/explore/subject/{slug}', [ContentController::class, 'show'])->name('explore.subject');
});
