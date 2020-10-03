<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        User::factory(30)->create();

        Post::create([
            'content' => 'Content for my first post',
            'user_id' => User::get()->pluck('id')->random()
        ]);
        Post::create([
            'content' => 'Content for my first post',
            'user_id' => User::get()->pluck('id')->random()
        ]);
        Post::create([
            'content' => 'Content for my second post',
            'user_id' => User::get()->pluck('id')->random()
        ]);
        Post::create([
            'content' => 'Content for my third post',
            'user_id' => User::get()->pluck('id')->random()
        ]);
        Post::create([
            'content' => 'Content for my fourth post',
            'user_id' => User::get()->pluck('id')->random()
        ]);
    }
}
