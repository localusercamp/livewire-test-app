<?php

namespace App\Livewire\Components\Tracker;

use App\Models\Task as TaskModel;
use Livewire\Component;

class Task extends Component
{
    public TaskModel $task;

    public function mount(TaskModel $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.components.tracker.task');
    }
}
