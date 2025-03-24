<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class Chat extends Component
{
    public $message;
    public $messages;

    protected $rules = [
        'message' => 'required|string|max:255',
    ];

    // Ascoltiamo l'evento per aggiornare la lista dei messaggi
    protected $listeners = ['messageSent' => 'updateMessages'];

    public function mount()
    {
        $this->updateMessages();
    }

    public function sendMessage()
    {
        $this->validate();

        if (Auth::check()) {
            $newMessage = Message::create([
                'user_id' => Auth::id(),
                'message' => $this->message,
            ]);

            $this->message = '';

            // Emettiamo un evento per aggiornare i messaggi
            $this->dispatch('messageSent');

            // Se utilizzi broadcasting, puoi fare:
            // broadcast(new \App\Events\MessageSentEvent($newMessage))->toOthers();
        } else {
            session()->flash('error', 'Devi essere loggato per inviare un messaggio.');
        }
    }

    public function deleteMessage($messageId)
    {
        $message = Message::find($messageId);

        // Verifica che il messaggio esista e che l'utente autenticato sia il proprietario
        if ($message && $message->user_id == Auth::id()) {
            $message->delete();

            // Aggiorna la lista dei messaggi
            $this->dispatch('messageSent');
        } else {
            session()->flash('error', 'Non puoi eliminare questo messaggio.');
        }
    }

    public function updateMessages()
    {
        // Convertiamo in array per evitare problemi di serializzazione
        $this->messages = Message::latest()->take(10)->with('user')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
