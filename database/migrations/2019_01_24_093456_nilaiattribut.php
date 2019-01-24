<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nilaiattribut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilaiattribut', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modal');
            $table->integer('gerai');
            $table->integer('bep');
            $table->integer('fee');
            $table->integer('keuntungan');
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
        Schema::dropIfExists('nilaiattribut');
    }
}
