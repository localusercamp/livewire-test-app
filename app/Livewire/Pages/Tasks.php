<?php

namespace App\Livewire\Pages;

use App\Models\Board;
use Illuminate\Support\Collection;
use Livewire\Component;

class Tasks extends Component
{
    public Collection $boards;

    protected function getBoards(): Collection
    {
        return Board::query()->with('tasks')->get();
    }

    public function mount()
    {
        $this->boards = $this->getBoards();
    }

    public function render()
    {
        return view('livewire.pages.tasks');
    }
}
