<?php

use App\Listing;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            'Sales',
            'Events',
            'Personal',
            'Publicity',
        ];

        Listing::truncate();
        foreach($items as $item) {
            Listing::create([
                'name' => $item,
                'slug' => Str::slug($item)
            ]);
        }
    }
}
