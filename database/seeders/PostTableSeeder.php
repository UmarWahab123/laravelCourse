<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //to insert data into my DB table using seed class and call this seeder class inside DatabseSeeder
        // DB::table('posts')->insert([

        // 'title' => 'First Post Title',
        // 'body' => 'First Post Body',

        //to insert a second record just change this and run the seed commad.

        //     'title' => 'Second Post Title',
        //     'body' => 'Second Post Body',
        // ]);
        //to insert a multiple record at a time use Faker packege and write the below code

        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('posts')->insert([
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(4),
            ]);
        }
    }
}
