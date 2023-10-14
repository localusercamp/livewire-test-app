<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Board;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Board::query()->truncate();
        Task::query()->truncate();

        Board::factory()
            ->count(5)
            ->has(Task::factory()->count(rand(0, 7)))
            ->create();
    }
}
