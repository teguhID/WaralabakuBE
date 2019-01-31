<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBobot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bobot', function (Blueprint $table) {
            // $table->double('test', 2, 2)->nullable()->after('bep'); // add column
            // $table->dropColumn('test')->nullable()->after('bep'); //delete column
            $table->float('bep')->nullable()->change(); //update type column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bobot', function (Blueprint $table) {
            // $table->dropColumn('test', 2, 2)->nullable(); //add column
            // $table->double('test', 2, 2)->nullable(); //delete column
        }); 
    }
}
