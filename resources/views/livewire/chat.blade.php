<div class="chat-container">
    <div class="messages" wire:poll.3000ms>
        @foreach($messages as $message)
        <div class="message">
            <strong class="text-white"><i class="bi bi-person-circle me-2"></i> {{ $message['user']['name'] ?? 'Utente sconosciuto' }}: @if(Auth::check() && Auth::id() == $message['user_id'])
                <a
                    wire:click="deleteMessage({{ $message['id'] }})"
                    class="text-red small delete"
                    onclick="return confirm('Are you sure?')">
                    <i class="bi bi-x"></i>
                </a>
                @endif</strong>
            <p class="text-white-50">{{ $message['message'] }}</p>

        </div>
        @endforeach
    </div>

    @auth
    <form wire:submit.prevent="sendMessage">
        <textarea
            wire:model="message"
            class="form-control form-control-dark"
            placeholder="Write a messagge.."
            style="margin-top: 10px;"></textarea>
        <button type="submit" class="btn btn-outline-danger form-control mt-2">Send</button>
    </form>
    @else
    <p class="mt-2">You must have been register to chat.</p>
    @endauth
</div>