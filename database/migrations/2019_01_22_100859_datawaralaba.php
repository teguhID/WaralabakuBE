<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datawaralaba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datawaralaba', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jenis')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->double('mdoal', 8, 2)->nullable();
            $table->double('gerai', 8, 2)->nullable();
            $table->double('bep', 8, 2)->nullable();
            $table->double('fee', 8, 2)->nullable();
            $table->double('keuntungan', 8, 2)->nullable();
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
        Schema::dropIfExists('datawaralaba');
    }
}
