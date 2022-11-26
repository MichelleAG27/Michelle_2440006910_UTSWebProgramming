<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as fkr;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fkr = fkr::create();
        for($i=1;$i<=8;$i++){
            DB::table('books')->insert([
               'publisher_id' => $fkr->numberBetween(1, 3),
               'title' => 'Judul '.$i,
               'author' => $fkr->name,
               'year' => $fkr->numberBetween(2000, 2022),
                'synopsis' =>$fkr->text(150),
                'image' => 'buku.webp'
            ]);
        }

    }
}
