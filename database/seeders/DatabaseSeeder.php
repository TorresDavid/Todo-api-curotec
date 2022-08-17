<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Task::create([
            'name' => 'Test Task Pending',
            'status' => Task::STATUS_PENDING
        ]);

        Task::create([
            'name' => 'Test Task Completed',
            'status' => Task::STATUS_COMPLETED
        ]);
    }
}
