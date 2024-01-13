<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // use this if you have many functions or seeders inside database seeder - for future proofing this is the best way, especially for large projects
        $json = File::get('database/json/posts.json');
        $posts = collect(json_decode($json));


        // $posts = collect([
        //     [
        //         'title' => 'Post One',
        //         'slug' => 'post-one',
        //         'excerpt' => 'Excerpt of post one',
        //         'description' => 'Description of post one',
        //         'is_published' => false,
        //         'min_to_read' => 3
        //     ],
        //     [
        //         'title' => 'Post Two',
        //         'slug' => 'post-two',
        //         'excerpt' => 'Excerpt of post two',
        //         'description' => 'Description of post two',
        //         'is_published' => false,
        //         'min_to_read' => 9
        //     ]
        // ]);

        $posts->each(function ($post) {
            Post::create([
                'title' => $post->title,
                'slug' => $post->slug,
                'excerpt' => $post->excerpt,
                'description' => $post->description,
                'is_published' => $post->is_published,
                'min_to_read' => $post->min_to_read
            ]);
        });
    }
}
