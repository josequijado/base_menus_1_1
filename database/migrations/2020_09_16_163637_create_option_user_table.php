<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            /** La definición de los campos que se
              * usarán como claves foráneas */
            $table->integer('option_id')->unsigned();
            $table->integer('user_id')->unsigned();
            /** La declaración de las claves foráneas
              * en los campos necesarios. */
            $table->foreign('option_id')->references('id')->on('group_and_opyions');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('permission_user');
    }
}
