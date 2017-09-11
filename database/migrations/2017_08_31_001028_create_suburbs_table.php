<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create suburbs table
        Schema::create('suburbs', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('postcode_id')->unsigned();
            $table->foreign('postcode_id')->references('id')->on('postcodes')->onDelete('cascade');
            $table->string('name');
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
        // Delete suburbs table
        Schema::dropIfExists('suburbs');
    }
}
