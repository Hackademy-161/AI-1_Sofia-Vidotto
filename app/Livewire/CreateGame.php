<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateGame extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Name is required')]
    public $name;
    #[Validate('required', message: 'Date is required')]
    public $date;
    #[Validate('required', message: 'Prize is required')]
    public $prize;
    #[Validate('required', message: 'Team is required')]
    public $team;
    #[Validate('required', message: 'Sponsor is required')]
    public $sponsor;
    #[Validate('required', message: 'Img is required')]
    public $img;

    public function createGame()
    {

        $this->validate();

        Game::create([
            'name' => $this->name,
            'date' => $this->date,
            'prize' => $this->prize,
            'team' => $this->team,
            'sponsor' => $this->sponsor,
            'img' => $this->img ? $this->img->store('images', 'public') : null,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-game');
    }
}
