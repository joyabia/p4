<?php

use Illuminate\Database\Seeder;
use p4\Attendance;


class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          	$faker = \Faker\Factory::create();
            Attendance::truncate();


			 foreach(range(1,20) as $index)
			 {
			 	$time  = $faker->dateTimeThisMonth($max = 'now');

			 Attendance::create([
			 'created_at' => ($time),
			 'updated_at' => ($time),
			 'attendancestatus'=> $faker->biasedNumberBetween($min = 0, $max = 1),
             'kid_id'=>$faker->biasedNumberBetween($min = 20, $max = 25),


]);
    }
    
}
}
