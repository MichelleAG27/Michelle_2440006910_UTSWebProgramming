<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as fkr;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fkr = fkr::create();
        for($i=1;$i<=3;$i++) {
            DB::table('publishers')->insert([
                'name' => $fkr->name,
                'address' => $fkr->address,
                'phone' =>$fkr->phoneNumber,
                'email' =>$fkr->email,
                'image' => 'logo.png'
            ]);
        }
    }
}
