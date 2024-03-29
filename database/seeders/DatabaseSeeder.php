<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PostSeeder::class,
            UserSeeder::class
        ]);

        // $json = File::get('database/json/posts.json');
        // $posts = collect(json_decode($json));


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

        // $posts->each(function ($post) {
        //     Post::create([
        //         'title' => $post->title,
        //         'slug' => $post->slug,
        //         'excerpt' => $post->excerpt,
        //         'description' => $post->description,
        //         'is_published' => $post->is_published,
        //         'min_to_read' => $post->min_to_read
        //     ]);
        // });
    }
}
