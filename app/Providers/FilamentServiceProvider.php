<?php

namespace App\Providers;

use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        FilamentColor::register([
            'danger' => Color::Red,
            'gray' => Color::Zinc,
            'info' => Color::Blue,
            'primary' => Color::Lime,
            'success' => Color::Green,
            'warning' => Color::Amber,
        ]);
    }
}
