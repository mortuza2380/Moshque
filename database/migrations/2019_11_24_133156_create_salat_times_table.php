<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalatTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salat_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('fajr');
            $table->string('dhuhr');
            $table->string('asr');
            $table->string('maghrib');
            $table->string('isha');
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
        Schema::dropIfExists('salat_times');
    }
}
