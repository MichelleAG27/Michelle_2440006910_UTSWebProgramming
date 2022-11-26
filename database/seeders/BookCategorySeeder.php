<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as fkr;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fkr = fkr::create();
        for($i=1;$i<=10;$i++){
            DB::table('book_category')->insert([
                'book_id'=>$fkr->numberBetween(1, 8),
                'category_id'=>$fkr->numberBetween(1,3)
            ]);
        }
    }
}
