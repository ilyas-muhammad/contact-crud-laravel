<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // iteration with faker 
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++) {
            // insert to db
            DB::table('contact')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'group_id' => $faker->numberBetween(1,4),
                'address' => $faker->address,
                'city' => $faker->city,
                'zip' => $faker->postcode,
                'country' => $faker->country,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'note' => $faker->text
            ]);
        }
    }
}
