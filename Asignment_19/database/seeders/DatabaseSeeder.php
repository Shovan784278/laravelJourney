<?php

//namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Post::factory(5)->create()->each(function ($post) {
            Comment::factory(rand(1, 5))->create(['post_id' => $post->id]);
        });
    }
}
