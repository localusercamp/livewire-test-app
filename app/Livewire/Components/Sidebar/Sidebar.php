<?php

namespace App\Livewire\Components\Sidebar;

use Illuminate\Support\Collection;
use Livewire\Component;

class Sidebar extends Component
{
    public Collection $links;

    protected function getLinks(): Collection
    {
        return collect([
            ['title' => 'Dashboard', 'to' => '/',        'icon' => 'phosphor-gauge'],
            ['title' => 'Profile',   'to' => '/profile', 'icon' => 'phosphor-user'],
            ['title' => 'My Posts',  'to' => '/posts',   'icon' => 'phosphor-scroll'],
            ['title' => 'Tasks',     'to' => '/tasks',   'icon' => 'phosphor-check-square'],
        ]);
    }

    public function mount()
    {
        $this->links = $this->getLinks();
    }

    public function render()
    {
        return view('livewire.components.sidebar.sidebar');
    }
}
