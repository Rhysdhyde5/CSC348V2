<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post1 = new Post;
        $post1->user_id = "1";
        $post1->title = "facts about multi stage";
        $post1->body = "the multi stage fitness test is a fitness test";
        $post1->time_posted_at = now();
        $post1->save();
        
        Post::factory()->count(20)->create();
    }
}
