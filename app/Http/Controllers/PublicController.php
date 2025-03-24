<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'verified',
        ];
    }

    public function index()
    {
        return view('index');
    }

    public function showVerificationNotice(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/'); // Oppure puoi reindirizzare a una dashboard
        }
        return view('auth.verify-email');
    }
}
