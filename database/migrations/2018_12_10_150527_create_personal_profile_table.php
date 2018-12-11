<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			      $table->string('username');
            $table->string('phone',10)->unique();
            $table->dateTime('birthday');
            $table->string('gender')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_profile');
    }
}
