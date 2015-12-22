<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        # Most tables start off this way
        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('firstname');
        $table->string('lastname');
        $table->string('picture');
        $table->date('birthday');


    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kids');
    }
}
