<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Post();
        $post1->title = "First post";
        $post1->body = "Lorem ipsum 1";
        $post1->author = "Milos";
        $post1->save();

        $post2 = new Post();
        $post2->title = "Second post";
        $post2->body = "Lorem ipsum 2";
        $post2->author = "Danilo";
        $post2->save();
    }
}
