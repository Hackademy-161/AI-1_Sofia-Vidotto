<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [PublicController::class, 'index'])->name('index');

Route::get('/auth/github', [AuthController::class, 'redirectToGithub'])->name('github.login');
Route::get('/auth/github/callback', [AuthController::class, 'handleGithubCallback']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/index'); // Reindirizza alla pagina desiderata dopo la verifica
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link di verifica inviato!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
