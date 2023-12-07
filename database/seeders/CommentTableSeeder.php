<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment1 = new comment;
        $comment1->user_id = "1";
        $comment1->post_id = "4"; //put key for name what is the link for post id how do you link it.
        $comment1->body = "this game sucks";
        $comment1->time_comment_at = now();
        $comment1->save();

        Comment::factory()->count(20)->create();
    }
}
