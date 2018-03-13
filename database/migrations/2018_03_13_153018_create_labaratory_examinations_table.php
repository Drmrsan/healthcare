<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabaratoryExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labaratory_examinations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->integer('blood_pressures_id')->unsigned();
            $table->foreign('blood_pressures_id')->references('id')->on('blood_preassures');

            $table->integer('blood_sugar_levels_id')->unsigned();
            $table->foreign('blood_sugar_levels_id')->references('id')->on('blood_sugar_levels');

            $table->integer('cholesterols_id')->unsigned();
            $table->foreign('cholesterols_id')->references('id')->on('cholesterols');

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
        Schema::dropIfExists('labaratory_examinations');
    }
}
