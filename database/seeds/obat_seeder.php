<?php

use Illuminate\Database\Seeder;

class obat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 20; //batasan berapa banyak data
        for ($i = 0; $i < $limit; $i++) {
            DB::table('obat')->insert([ //mengisi datadi database
                'nama_obat' => $faker->name,
                'harga' => $faker->numberBetween(1000,9000),
                'stok' => $faker->numberBetween(50,200),
                'expired_date' => $faker->date('Y-m-d',	null),
                'production_date' => $faker->date('Y-m-d','now'),
            ]);
        }
    }
}
