<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parentCategories = [
                // id=1
            [
                'name' => 'Täzelikler',
                'category_id' => null,
            ],
                // id=2
            [
                'name' => 'Habarlar',
                'category_id' => null,
            ],
                // id=3
            [
                'name' => 'Syýasat',                
                'category_id' => null,
            ],
                // id=4
            [
                'name' => 'Ylym-bilim',
                'category_id' => null,
            ],
                // id=5
            [
                'name' => 'Tehnologiýa',
                'category_id' => null,
            ],
                // id=6
            [
                'name' => 'Saglyk',
                'category_id' => null,
            ],
                // id=7
            [
                'name' => 'Sport',
                'category_id' => null,
            ],
                // id=8
            [
                'name' => 'Dünýä habarlary',
                'category_id' => null,
            ],
                // id=9
            [
                'name' => 'Ykdysadyýet',
                'category_id' => null,
            ],
        ];

        // <-- begin:: Parent Category -->
        foreach ($parentCategories as $parentCategory)
        {
            Category::create([
                'name' => $parentCategory['name'],
                'category_id' => $parentCategory['category_id'],
            ]);
        }
        // <-- end:: Parent Category -->

    }
}
