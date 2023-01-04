<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageimageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packageimage', function (Blueprint $table) {
            $table->id();
            $table->text('filepath');
            $table->unsignedBigInteger('packageid');
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
        Schema::dropIfExists('packageimage');
    }
}
