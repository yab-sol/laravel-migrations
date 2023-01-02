<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->string('accomodation');
            $table->text('itenary')->nullable();
            $table->string('type')->nullable();
            $table->string('included')->nullable();
            $table->string('excluded')->nullable();
            $table->string('duration');
            $table->unsignedBigInteger('tourid');
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
        Schema::dropIfExists('package');
    }
}