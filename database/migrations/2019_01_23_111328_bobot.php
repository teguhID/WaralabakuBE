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
            $table->double('modal', 5, 2)->nullable();
            $table->double('gerai', 5, 2)->nullable();
            $table->double('bep', 5, 2)->nullable();
            $table->double('fee', 5, 2)->nullable();
            $table->double('keuntungan', 5, 2)->nullable();
            $table->double('modalNorm', 5, 2)->nullable();
            $table->double('geraiNorm', 5, 2)->nullable();
            $table->double('bepNorm', 5, 2)->nullable();
            $table->double('feeNorm', 5, 2)->nullable();
            $table->double('keuntunganNorm', 5, 2)->nullable();
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
