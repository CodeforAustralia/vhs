<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->rememberToken();
            $table->string('client_id')->nullable();
            $table->string('usertype')->default(6);
            $table->string('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('phone')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
