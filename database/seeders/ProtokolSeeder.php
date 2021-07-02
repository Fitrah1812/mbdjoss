<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProtokolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 100001; $i <= 1000000; $i++) {
            $faker = Factory::create('id_ID');
            DB::table('protokol')->insert([
                "pr_id" => $i,
                "pu_id" => $i + 1,
                "pr_judul" => $faker->sentence(),
                "pr_tglpengajuan" => $faker->date(),
                "pr_tglkeputusankep" => $faker->date(),
                "pr_tglpenugasantim" => $faker->date(),
                "pr_klasifikasikep" => $faker->randomElement(['E2', 'E1', 'FB', '']),
            ]);
        }


    }
}
