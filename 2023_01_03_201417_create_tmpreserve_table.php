<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpreserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmpreserve', function (Blueprint $table) {
            $table->id();
            $table->date('departuredate');
            $table->integer('qty');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('packageid');
            $table->unsignedBigInteger('tourid');
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
        Schema::dropIfExists('tmpreserve');
    }
}
