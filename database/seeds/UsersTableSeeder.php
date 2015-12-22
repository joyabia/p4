<?php

use Illuminate\Database\Seeder;
use p4\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


   public function run()
{

 $faker = \Faker\Factory::create();


 foreach(range(1,7) as $index)
 {

 User::create([
     'name' => $faker->name(),
     'email' =>$faker->email(),
     'password'=>\Hash::make('helloworld'),
     'created_at' => Carbon\Carbon::now()->toDateTimeString(),
     'updated_at' => Carbon\Carbon::now()->toDateTimeString(),


]);
}

    $user = \p4\User::firstOrCreate(['email' => 'jill@harvard.edu']);
    $user->name = 'Jill';
    $user->email = 'jill@harvard.edu';
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \p4\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
    $user->name = 'Jamal';
    $user->email = 'jamal@harvard.edu';
    $user->password = \Hash::make('helloworld');
    $user->save();

    
    }

}
