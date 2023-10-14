<?php

namespace App\Livewire\Components\Tracker;

use App\Models\Board as BoardModel;
use Livewire\Component;

class Board extends Component
{
    public BoardModel $board;

    public function mount(BoardModel $board)
    {
        $this->board = $board;
    }

    public function render()
    {
        return view('livewire.components.tracker.board');
    }
}
