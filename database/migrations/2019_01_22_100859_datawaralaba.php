<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataWaralaba extends Migration
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
            $table->biginteger('modal')->nullable();
            $table->integer('gerai')->nullable();
            $table->integer('bep')->nullable();
            $table->enum('fee',['ada', 'tidak ada'])->nullable();
            $table->integer('keuntungan')->nullable();
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
