<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsColumnToAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //add the timestamp column
    public function up()
    {
        Schema::table('attendances', function ($table) {
        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance', function (Blueprint $table) {
            //
        });
    }
}
