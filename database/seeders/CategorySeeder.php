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
                'name' => 'Тест-драйвы',
                'category_id' => null,
            ],
                // id=2
            [
                'name' => 'ГИБДД',
                'category_id' => null,
            ],
                // id=3
            [
                'name' => 'Новости',
                'category_id' => null,
            ],
                // id=4
            [
                'name' => 'Кроссоверы',
                'category_id' => null,
            ],
                // id=5
            [
                'name' => 'LADA',
                'category_id' => null,
            ],
                // id=6
            [
                'name' => 'Штрафы',
                'category_id' => null,
            ],
                // id=7
            [
                'name' => 'Техосмотр',
                'category_id' => null,
            ],
                // id=8
            [
                'name' => 'АвтоМобиль',
                'category_id' => null,
            ],
                // id=9
            [
                'name' => 'Другие',
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
