<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\de_DE\Payment;
use Illuminate\Support\Facades\DB;

class SkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100000; $i++) {
            $offset = rand(1, 10000);
            DB::table('sk_kep')->insert([
                "sk_id" => $i+256784,
                "kep_id" => $offset,
                "sk_nomorsk" => 'SK/KEPK/2029.932-12/TP',
                "sk_validstart" => '2017-07-01',
                "sk_validend" => '2021-07-01',
            ]);
        }
    }
}
