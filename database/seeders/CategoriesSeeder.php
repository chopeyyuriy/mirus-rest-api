<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categories Management
        for ($i = 0; $i < 5; $i++) {
            Category::create([
                'name'=>"Sports $i",
                'parent_id'=>0
            ]);
        }
    }
}
