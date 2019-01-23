<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bobot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot', function (Blueprint $table) {
            $table->increments('id');
            $table->double('modal', 8, 2)->nullable();
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
        Schema::dropIfExists('bobot');
    }
}
