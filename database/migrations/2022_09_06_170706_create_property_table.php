<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("name") ;
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("category_id")->unsigned();
            $table->bigInteger("location_id")->unsigned();
            $table->bigInteger("ownership_id")->unsigned() ;
            $table->decimal("price");
            $table->string("geolocation");
            $table->boolean("verified")->default(False) ;
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('ownership_id')->references('id')->on('ownerships');
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
        Schema::dropIfExists('property');
    }
};
