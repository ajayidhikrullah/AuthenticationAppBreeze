<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


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

        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create();

       $personal = Category::create([
            'name' => 'PersonalCategory_name',
            'slug' => 'PersonalCategory_slug',
        ]);

        $work = Category::create([
           'name' => 'WorkCategory_name',
           'slug' => 'WorkCategory_slug', 
        ]);

        $family = Category::create([
            'name' => 'FamilyCategory_name',
            'slug' => 'FamilyCategory_slug',
        ]);

        //post tables
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My personal Post under Personal Category',
            'slug' => 'My_first_slug_personalPost',
            'excerpt' => 'All about Personal excerpt',
            'body' => 'Personal  is good in ones life',

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post under work Category',
            'slug' => 'My_first_slug_workPost',
            'excerpt' => 'All about work excerpt',
            'body' => 'Working  is good in ones life'
        ]);
    }
}
