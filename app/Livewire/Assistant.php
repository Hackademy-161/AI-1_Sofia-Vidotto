<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;

use App\Models\ChatMessage;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Auth;

class Assistant extends Component
{
    public $prompt = '';
    public $response = '';
    public $isOpen = false;
    public $messages = [];

    public function mount()
    {
        $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.assistant');
    }

    public function talk()
    {
        $this->validate([
            'prompt' => 'required|string|max:500',
        ]);

        // Controlliamo se l'utente sta chiedendo dei tornei
        if (str_contains(strtolower($this->prompt), 'tornei') || str_contains(strtolower($this->prompt), 'tournament')) {
            $this->response = $this->getUpcomingTournaments();
        } else {
            // Altrimenti, usa OpenAI per la risposta
            $result = OpenAI::chat()->create([
                'model' => 'gpt-4o-mini',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are an AI assistant for a gaming tournament platform. You provide details about upcoming tournaments, registration help, and account verification.'],
                    ['role' => 'user', 'content' => $this->prompt],
                ],
            ]);

            $this->response = $result['choices'][0]['message']['content'];
        }

        // Salviamo la conversazione nel database
        if (Auth::check()) {
            ChatMessage::create([
                'user_id' => Auth::id(),
                'user_message' => $this->prompt,
                'ai_response' => $this->response,
            ]);
        }

        // Aggiorna i messaggi della chat
        $this->loadMessages();

        // Svuota il campo input
        $this->prompt = '';
    }

    public function getUpcomingTournaments()
    {
        $tournaments = Game::upcoming()->take(5)->get();

        if ($tournaments->isEmpty()) {
            return "Non ci sono tornei in programma al momento. Controlla più tardi!";
        }

        $response = "Ecco i prossimi tornei disponibili:\n";
        foreach ($tournaments as $tournament) {
            $response .= "🎮 **{$tournament->name}**\n📅 Data: {$tournament->date}\n📍 Luogo: {$tournament->location}\n🏆 Premio: {$tournament->prize_pool}\n💰 Sponsor: {$tournament->sponsor}\n\n";
        }

        return $response;
    }

    public function loadMessages()
    {
        if (Auth::check()) {
            $this->messages = ChatMessage::where('user_id', Auth::id())
                ->latest()
                ->take(10)
                ->get()
                ->reverse()
                ->toArray();
        }
    }

    public function toggleAssistant()
    {
        $this->isOpen = !$this->isOpen;
    }
}
