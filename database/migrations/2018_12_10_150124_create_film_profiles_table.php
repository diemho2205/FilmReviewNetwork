<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
			$table->string('favourite_film')->default('Enter your favorite film');
            $table->string('favourite_character')->default('Enter your favorite character');
            $table->string('favorite_genre')->default('Enter your favorite genre');
            $table->string('feeling')->default('Enter your feeling');
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
        Schema::dropIfExists('film_profiles');
    }
}
