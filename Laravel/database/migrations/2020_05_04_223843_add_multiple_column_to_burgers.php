<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToBurgers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('burgers', function (Blueprint $table) {
            $table->string('bname')->nullable();
            $table->string('descrp')->nullable();
            $table->integer('quant')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('burgers', function (Blueprint $table) {
            $table->dropColumn(['bname', 'descrp', 'quant']);
        });
    }
}
