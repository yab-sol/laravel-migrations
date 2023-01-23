<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservedpackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservedpackage', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->date('departuredate');
            $table->integer('qty');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('packageid');
            $table->unsignedBigInteger('tourid');
            
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('packageid')->references('id')->on('package');
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
        Schema::dropIfExists('reservedpackage');
    }
}
