<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wishlist;

class wishlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wishlistRecords = [
            ['id'=> 1, 'user_id'=> 1, 'product_id'=> 1],
            ['id'=> 2, 'user_id'=> 1, 'product_id'=> 2]
        ];

        Wishlist::insert($wishlistRecords);
    }
}
