<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address_line_1');
            $table->string('address_line_2')->default("")->nullable();
            $table->string('website_url')->default("")->nullable();
            $table->string('description')->default("")->nullable();
            $table->string('logo')->default("");
            $table->unsignedInteger('city_id');
            $table->string('zip');
            $table->string('domain');
            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::dropIfExists('companies');
    }
}
