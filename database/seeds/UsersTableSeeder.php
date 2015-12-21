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

    $user = \p4\User::firstOrCreate(['email' => 'perry@gmail.com']);
    $user->name = 'Perry Presh';
    $user->email = 'perry@gmail.com';
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \p4\User::firstOrCreate(['email' => 'face@gmail.com']);
    $user->name = 'Tu Face';
    $user->email = 'face@gmail.com';
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \p4\User::firstOrCreate(['email' => 'tara@gmail.com']);
    $user->name = 'Tara Bright';
    $user->email = 'tara@gmail.com';
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \p4\User::firstOrCreate(['email' => 'barry@gmail.com']);
    $user->name = 'Barry White';
    $user->email = 'barry@gmail.com';
    $user->password = \Hash::make('helloworld');
    $user->save();
    }

}
