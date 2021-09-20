<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $categories = Category::all();

        foreach ($categories as $key => $c) {
            for ($i = 1; $i <= 20; $i++) {
                Post::create([
                    'title' => "Post $i $key",
                    'url_clean' => "post-$i-$key",
                    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    'posted' => 'yes',
                    'category_id' => $c->id,
                ]);
            }
        }
    }
}
