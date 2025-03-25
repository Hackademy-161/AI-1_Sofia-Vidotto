<div>
    <form method="POST" wire:submit.blur="createGame">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li><i class="bi bi-exclamation-circle"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="mb-3">
            <label class="form-label small">Tournament Name</label>
            <input type="text" class="form-control form-control-dark text-bg-dark" placeholder="Tournament Name" wire:model.blur="name">
        </div>
        <div class="mb-3">
            <label class="form-label small">Date</label>
            <input type="date" class="form-control form-control-dark text-bg-dark" placeholder="Date" wire:model.blur="date">
        </div>
        <div class="mb-3">
            <label class="form-label small">Team Size</label>
            <input type="text" class="form-control form-control-dark text-bg-dark" placeholder="Team Size" wire:model.blur="team">
        </div>
        <div class="mb-3">
            <label class="form-label small">Prize</label>
            <input type="number" class="form-control form-control-dark text-bg-dark" placeholder="Prize" wire:model.blur="prize">
        </div>
        <div class="mb-3">
            <label class="form-label small">Sponsor (Steam, Sony, XBOX..)</label>
            <input type="text" class="form-control form-control-dark text-bg-dark" placeholder="Sponsor" wire:model.blur="sponsor">
        </div>
        <div class="mb-3">
            <label class="form-label small">Upload Image</label>
            <input type="file" class="form-control form-control-dark text-bg-dark me-2 small-input" wire:model.blur="img">
        </div>
        <div class="my-3 text-center">
            <button type="submit" class="btn btn-danger w-100 fs-5">Create Match</button>
        </div>
    </form>
</div>