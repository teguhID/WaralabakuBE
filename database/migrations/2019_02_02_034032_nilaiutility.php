<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nilaikriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilaiutility', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->integer('modal')->nullable();
            $table->integer('gerai')->nullable();
            $table->integer('bep')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('keuntungan')->nullable();
            $table->double('modalUtility', 4, 2)->nullable();
            $table->double('geraiUtility', 4, 2)->nullable();
            $table->double('bepUtility', 4, 2)->nullable();
            $table->double('feeUtility', 4, 2)->nullable();
            $table->double('keuntunganUtility', 4, 2)->nullable();
            $table->double('hasil', 4, 2)->nullable();
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
        Schema::dropIfExists('nilaikriteria');
    }
}
