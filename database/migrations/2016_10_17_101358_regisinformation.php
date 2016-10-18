<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Regisinformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('register_informations', function (Blueprint $table) {
        $table->increments('id');
        $table->string('regis_code')->nullable();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('phone_number');
        $table->string('email');
        $table->date('birthday')->nullable();
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
        Schema::dropIfExists('register_informations');
    }
}
