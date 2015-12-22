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

    	Kid::truncate();
    $kid = \p4\Kid::firstOrCreate(['id' => 20]);
    $kid->firstname = 'Juluis';
    $kid->lastname = 'Go';
    $kid->birthday = 2010-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	$kid = \p4\Kid::firstOrCreate(['id' => 21]);
    $kid->firstname = 'Pah';
    $kid->lastname = 'Lim';
    $kid->birthday = 2010-08-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	    $kid = \p4\Kid::firstOrCreate(['id' => 22]);
    $kid->firstname = 'Jus';
    $kid->lastname = 'Stry';
    $kid->birthday = 2011-05-10;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	    $kid = \p4\Kid::firstOrCreate(['id' => 23]);
    $kid->firstname = 'Mary';
    $kid->lastname = 'Store';
    $kid->birthday = 2012-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	    $kid = \p4\Kid::firstOrCreate(['id' => 24]);
    $kid->firstname = 'Juluis';
    $kid->lastname = 'Go';
    $kid->birthday = 2012-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	    $kid = \p4\Kid::firstOrCreate(['id' => 25]);
    $kid->firstname = 'Brett';
    $kid->lastname = 'Lunz';
    $kid->birthday = 2013-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	    $kid = \p4\Kid::firstOrCreate(['id' => 20]);
    $kid->firstname = 'Juluis';
    $kid->lastname = 'Go';
    $kid->birthday = 2010-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	    $kid = \p4\Kid::firstOrCreate(['id' => 20]);
    $kid->firstname = 'Juluis';
    $kid->lastname = 'Go';
    $kid->birthday = 2010-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();

 	$kid = \p4\Kid::firstOrCreate(['id' => 20]);
    $kid->firstname = 'Juluis';
    $kid->lastname = 'Go';
    $kid->birthday = 2010-05-07;
 	$kid->picture=('images/kid4.jpg');
 	$kid->save();


   
   $faker = \Faker\Factory::create();


 foreach(range(1,15) as $index)
 {

 Kid::create([
 'firstname' => $faker->firstName(),
 'lastname' => $faker->lastName(),
 'birthday' => $faker->dateTimeThisDecade->format('Y-m-d'),
 'picture'=>('images/kid4.jpg'),
 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
 'updated_at' => Carbon\Carbon::now()->toDateTimeString(),


]);

}
}
}