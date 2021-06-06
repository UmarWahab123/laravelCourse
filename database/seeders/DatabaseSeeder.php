<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //call here PostTableSeeder Class
        // $this->call([
        //     PostTableSeeder::class,
        // ]);

        //to insert a 1000  record to our DB table users use Faker package
        $faker = Faker::create();
        foreach (range(1, 1000) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'), //for secret(enrypted) password

            ]);
        }

    }
}
