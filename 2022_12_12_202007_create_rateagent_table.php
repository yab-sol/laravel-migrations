<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateagentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rateagent', function (Blueprint $table) {
            $table->id();
            $table->integer('rating')->nullable();
            $table->string('comment')->nullable();
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('tourid');

            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('tourid')->references('id')->on('touroperator');
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
        Schema::dropIfExists('rateagent');
    }
}
