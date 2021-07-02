<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Faker\Provider\de_DE\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100000; $i++) {
            $faker = Faker::create('id_ID');
            DB::table('kep')->insert([
                "kep_id" => $i,
                "kep_nama" => 'KEPK '.$faker->company,
                "kep_email" => $faker->companyEmail,
                "kep_password" => '12345',
                "kep_instansi" => $faker->company,
                "kep_alamat" => $faker->address,
                "kep_provinsi" => $faker->state,
                "kep_kotakab" => $faker->city,
                "kep_notelp" => $faker->phoneNumber,
                "kep_reknamabank" => $faker->creditCardType,
                "kep_reknomor" => $faker->bankAccountNumber,
                "kep_reknamaakun" => 'KEP '.$faker->company,
                "kep_rekswiftcode" => $faker->swiftBicNumber,
                "kep_statusaktif" => $faker->boolean($chanceOfGettingTrue = 90),
                "kep_statusdate" => '2021-07-01'
            ]);
        }
    }
}
