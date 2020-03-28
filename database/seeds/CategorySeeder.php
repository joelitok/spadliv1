<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Animals',
                'parent_id' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'Chien',
                'parent_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Chat',
                'parent_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Souris',
                'parent_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Lapin',
                'parent_id' => 1,
            ],


            [
                'id' => 6,
                'name' => 'Objects',
                'parent_id' => NULL,
            ],
            [
                'id' => 7,
                'name' => 'Maison',
                'parent_id' => 6,
            ],
            [
                'id' => 8,
                'name' => 'Table',
                'parent_id' => 6,
            ],
            [
                'id' => 9,
                'name' => 'Porte',
                'parent_id' => 6,
            ],
            [
                'id' => 10,
                'name' => 'Chaise',
                'parent_id' => 6,
            ],
        ];

        Category::truncate();
        foreach($items as $item) {
            Category::create([
                'id' => $item['id'],
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'parent_id' => $item['parent_id']
            ]);
        }
    }
}
