<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('suburd')->nullable();
            $table->string('state')->nullable();
            $table->BigInteger('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->string('country')->nullable();
            $table->BigInteger('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('contacts'); 
            $table->string('image')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
