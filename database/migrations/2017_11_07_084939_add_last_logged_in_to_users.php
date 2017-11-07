<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLastLoggedInToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table) {
        $table->dateTime('currently_logged_in')->nullable();
        $table->dateTime('last_logged_in')->nullable();
        $table->dropColumn('last_login_at');
        $table->dropColumn('last_login_ip');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function($table) {
      $table->dropColumn('currently_logged_in');
      $table->dropColumn('last_logged_in');
      $table->string('last_login_at')->nullable();
      $table->string('last_login_ip')->nullable();
      });
    }
}
