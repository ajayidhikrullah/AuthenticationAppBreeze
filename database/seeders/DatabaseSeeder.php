<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

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
        // \App\Models\User::factory(10)->create();
        $user = User::factory(3)->create();

        Category::create([
            'name' => 'PersonalCategory_name',
            'slug' => 'PersonalCategory_slug',
        ]);

        Category::create([
           'name' => 'WorkCategory_name',
           'slug' => 'WorkCategory_slug', 
        ]);

        Category::create([
            'name' => 'FamilyCategory_name',
            'slug' => 'FamilyCategory_slug',
        ]);
    }
}
