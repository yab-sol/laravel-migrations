<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->integer('to-rating');
            $table->integer('package-rating');
            $table->text('comment')->nullable();

            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('tourid');
            $table->unsignedBigInteger('packageid');

            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('tourid')->references('id')->on('touroperator');
            $table->foreign('packageid')->references('id')->on('package');
            
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
        Schema::dropIfExists('rating');
    }
}
