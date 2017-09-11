<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 
     Schema::create('user_address', function (Blueprint $table) {
        $table->engine = 'InnoDB';

        $table->increments('id');
        $table->bigInteger('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->string('address_1');
        $table->string('address_2')->nullable();
        $table->string('address_3')->nullable();
        $table->string('suburb_town');
        $table->string('postcode');
        $table->string('postal_address_1');
        $table->string('postal_suburb_town');
        $table->string('postal_postcode');
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
        //
        Schema::dropIfExists('user_address');
    }
}
