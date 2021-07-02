<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 200000; $i++) {
            DB::table('anggota')->insert([
                'ag_id' => $i,
                'ag_nama' => $faker->name,
                'ag_institusiasal' => $faker->company,
                'ag_email' => $faker->email,
                'ag_password' => $faker->password,
            ]);
        }
    }
}
