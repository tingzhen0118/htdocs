<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerMemberShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_member_ships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('personal_id')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->string('filename');
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
        Schema::dropIfExists('farmer_member_ships');
    }
}
