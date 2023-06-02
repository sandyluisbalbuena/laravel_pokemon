<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discussionPokemonCards = Category::where('slug', 'pokecard')->first();
        $discussionPokemonMonsters = Category::where('slug', 'pokemon')->first();


        Thread::create([
            'category_id' => $discussionPokemonCards->id,
            'title' => 'Best Pokemon Card Sets',
            'content' => 'Which Pokemon card sets do you consider the best? Share your favorites and discuss why they stand out!',
            'user_id'=>'6'
        ]);

        Thread::create([
            'category_id' => $discussionPokemonCards->id,
            'title' => 'Trading Pokemon Cards',
            'content' => 'Looking for fellow trainers to trade Pokemon cards? This thread is the place to connect and arrange trades.',
            'user_id'=>'7'
        ]);

        // Create threads for the Pokemon Monsters discussion
        Thread::create([
            'category_id' => $discussionPokemonMonsters->id,
            'title' => 'Favorite Pokemon Monsters',
            'content' => 'Let\'s talk about our favorite Pokemon monsters! Share the Pokemon that hold a special place in your heart.',
            'user_id'=>'3'
        ]);

        Thread::create([
            'category_id' => $discussionPokemonMonsters->id,
            'title' => 'Competitive Battling Strategies',
            'content' => 'Discuss and share your strategies for competitive Pokemon battles. Give tips and learn from other trainers!',
            'user_id'=>'2'
        ]);

    }
}
