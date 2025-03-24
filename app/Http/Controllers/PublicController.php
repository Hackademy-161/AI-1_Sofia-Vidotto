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
}
