<?php

namespace Database\Seeders;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Symfony\Component\Clock\now;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            [
                'name' => 'Create login page',
                'started_at' => Carbon::now()->subDays(2),
                'finished_at' => Carbon::now()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Implement user authentication',
                'started_at' => Carbon::now()->subDay(),
                'finished_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test system cache cleaning',
                'started_at' => Carbon::now(),
                'finished_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
