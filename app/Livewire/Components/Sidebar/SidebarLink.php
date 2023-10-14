<?php

namespace App\Livewire\Components\Sidebar;

use Livewire\Component;

class SidebarLink extends Component
{
    public string $title;
    public string $icon;
    public string $to;

    public function render()
    {
        return view('livewire.components.sidebar.sidebar-link');
    }
}
