<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouroperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touroperator', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('description');
            $table->integer('phonenumberp');
            $table->integer('phonenumbers')->nullable();
            $table->string('physicaladdress');
            $table->string('logopath')->nullable();
            $table->string('password');
            $table->string('bankaccountname');
            $table->string('bankaccountnumber');
            $table->string('bankname');
            $table->unsignedBigInteger('licenseid');
            $table->integer('status')->default(1);
            $table->foreign('licenseid')->references('id')->on('license');

            

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
        Schema::dropIfExists('touroperator');
    }
}
