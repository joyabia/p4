<?php

use Illuminate\Database\Seeder;

class KidUserTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{

    
    # First, create an array of all the users we want to associate kids with
    # The *key* will be the user email, and the *value* will be an array of tags.
    $users =[
        'jill@harvard.edu' => ['Julius','Pah'],
        'jamal@harvard.edu' => ['Brett','Mary', 'Jus'],
        
    ];

     # Now loop through the above array, creating a new pivot for each user to kid
    foreach($users as $email => $kids) {

        # First get the user
        $user = \p4\User::where('email','like',$email)->first();
        echo nl2br("user " .$user. "\n");
        

        # Now loop through each kid for this book, adding the pivot
        foreach($kids as $firstname) {
            echo nl2br ("firstname ".$firstname. "\n");

            $kid = \p4\Kid::where('firstname','LIKE',$firstname)->first();

            # Connect this user to this kid
            $user->kids()->attach($kid);


        }
    }
    }    

}
