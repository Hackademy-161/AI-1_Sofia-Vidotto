<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [PublicController::class, 'index'])->name('index');

Route::get('/auth/github', [AuthController::class, 'redirectToGithub'])->name('github.login');
Route::get('/auth/github/callback', [AuthController::class, 'handleGithubCallback']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/email/verify', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {
        return redirect('/');
    }
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('/game/store', [GameController::class, 'store'])->name('game.store');   