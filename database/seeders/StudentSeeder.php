<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            DB::table('students')->insert([
                'nis' => $faker->unique()->numberBetween(1, 100),
                'name' => $faker->name(),
                'phone' => $faker->phoneNumber(),
                'gender' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'address' => $faker->address(),
            ]);
        }
    }
}
