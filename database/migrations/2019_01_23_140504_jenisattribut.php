<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jenisattribut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisattribut', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modal')->nullable();
            $table->string('gerai')->nullable();
            $table->string('bep')->nullable();
            $table->string('fee')->nullable();
            $table->string('keuntungan')->nullable();
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
        Schema::dropIfExists('jenisattribut');
    }
}
