<?php

use Illuminate\Database\Seeder;
use p4\Kid;

class KidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

 Kid::truncate();

 foreach(range(1,10) as $index)
 {

 Kid::create([
 'firstname' => $faker->firstName(),
 'lastname' => $faker->lastName(),
 'picture'=>('images/kid4.jpg'),
 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
 'updated_at' => Carbon\Carbon::now()->toDateTimeString(),


]);
}
}
}