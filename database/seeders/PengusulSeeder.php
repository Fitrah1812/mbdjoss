<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PengusulSeeder extends Seeder
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
            if($i%5 == 0){
                DB::table('anggota')->insert([
                    'pu_id' => $i,
                    'p_id' => $i-(4*$i),
                    'pu_nama' => $faker->name,
                    'pu_instansi' => $faker->company,
                    'pu_nik' => $faker->numerify('################'),
                    'pu_email' => $faker->email,
                    'pu_password' => $faker->password,
                    'pu_nokontak' => $faker->numerify('08##########'),
                ]);
            }
            else
            {
                DB::table('anggota')->insert([
                    'pu_id' => $i,
                    'pu_nama' => $faker->name,
                    'pu_instansi' => $faker->company,
                    'pu_nik' => $faker->number,
                    'pu_email' => $faker->email,
                    'pu_password' => $faker->password,
                    'pu_nokontak' => $faker->numerify('08##########'),
                ]);
            }
        }
    }
}
