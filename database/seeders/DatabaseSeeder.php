<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Faker\Provider\Lorem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My first post', 
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nisi vel aliquid eos quibusdam accusantium quis reprehenderit ad, perferendis quisquam corrupti nemo libero quaerat nostrum maxime voluptatibus consequatur magnam culpa!</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My second post', 
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nisi vel aliquid eos quibusdam accusantium quis reprehenderit ad, perferendis quisquam corrupti nemo libero quaerat nostrum maxime voluptatibus consequatur magnam culpa!</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My third post', 
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nisi vel aliquid eos quibusdam accusantium quis reprehenderit ad, perferendis quisquam corrupti nemo libero quaerat nostrum maxime voluptatibus consequatur magnam culpa!</p>'
        ]);
    }
}
