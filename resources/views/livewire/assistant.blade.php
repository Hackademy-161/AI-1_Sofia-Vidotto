<div class="assistant-widget">
    <!-- Bottone Flottante -->
    <button class="assistant-toggle" wire:click="toggleAssistant">
        <i class="bi bi-robot"></i>
    </button>

    <!-- Box dell'assistente -->
    @if ($isOpen)
    <div class="assistant-container">
        <div class="assistant-box text-white-50">
            <div class="assistant-header">
                <h5>Nairobi AI</h5>
                <button class="assistant-close" wire:click="toggleAssistant">✖</button>
            </div>

            <div class="assistant-body">
                @foreach ($messages as $message)
                <div class="assistant-message my-2">
                    <span class="text-white"><strong>Tu:</strong> </span>{{ $message['user_message'] }}
                </div>
                <div class="assistant-response my-2">
                    <span class="text-white"> <strong>Nairobi:</strong></span> {!! nl2br(e($message['ai_response'])) !!}
                </div>
                @endforeach
            </div>

            <div class="assistant-footer">
                <form method="POST" wire:submit.prevent="talk" class="assistant-form">
                    <div class="input-group">
                        <input type="text" wire:model="prompt" class="form-control-dark text-bg-dark form-control" placeholder="Chiedi qualcosa..." required>
                        <button class="btn btn-danger" type="submit">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>