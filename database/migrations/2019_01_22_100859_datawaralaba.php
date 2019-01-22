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
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenis');
            $table->string('phone');
            $table->string('email');
            $table->string('web');
            $table->double('mdoal', 8, 2);
            $table->double('gerai', 8, 2);
            $table->double('bep', 8, 2);
            $table->double('fee', 8, 2);
            $table->double('keuntungan', 8, 2);
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
