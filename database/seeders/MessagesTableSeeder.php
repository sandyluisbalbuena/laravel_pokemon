<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Thread;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve the threads
        $threads = Thread::all();

        foreach ($threads as $thread) {
            // Generate 3-4 messages for each thread
            for ($i = 1; $i <= rand(3, 5); $i++) {
                Message::create([
                    'thread_id' => $thread->id,
                    'user_id' => rand(2, 7), // Assuming user IDs 1-5 exist
                    'content' => 'This is message ' . $i . ' for thread ' . $thread->title,
                ]);
            }
        }
    }
}
