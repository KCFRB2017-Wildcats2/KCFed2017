<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table) {
      $table->foreign('company_id')->references('id')->on('companies');
    });
    Schema::table('companies', function($table) {
      $table->foreign('city_id')->references('id')->on('cities');
    });
    Schema::table('company_users', function($table) {
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('company_id')->references('id')->on('companies');
    });
    Schema::table('company_admins', function($table) {
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('company_id')->references('id')->on('companies');
    });
    Schema::table('events', function($table) {
      $table->foreign('created_by')->references('id')->on('users');
      $table->foreign('company_id')->references('id')->on('companies');
    });
    Schema::table('event_attendees', function($table) {
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('event_id')->references('id')->on('events');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
