<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
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
        $result = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'user', 'content' => 'I love frontend'],
            ],
        ]);

        dd($result->choices[0]->message->content);

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
