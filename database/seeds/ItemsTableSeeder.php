<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create('zh_TW');
        Item::truncate();

        factory(Item::class, 100)->create();

        //$Item = factory(App\Item::class, 100)->create();

        // for ($i = 0; $i < 100; $i++) {
        //     Item::create([]);
        // }

        // $faker->name,
        // $faker->address,
        // $faker->text,
        // $faker->unique()->email,
        // $faker->optional()->word,
        // $evenValidator = function($digit){
        //     return $digit % 2 ==0;
        // }
        // $faker->valid($evenValidator)->randomDigit;
        //version 1.0

    }
}
