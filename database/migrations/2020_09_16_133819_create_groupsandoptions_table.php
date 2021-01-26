<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsAndOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_and_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('scope', 1)->default('U'); // (U)suario o (A)dministrador
            $table->char('type', 1)->default('O'); // (G)rupo u (O)pción para el menú lateral
            $table->string('icono')->nullable(); // El nombre del icono para mostrar, o la clase correspondiente, si se usa una librería tipo font-awesome o similar
            $table->string('rotulo')->nullable();
            $table->string('ruta')->nullable();
            $table->bigInteger('parent_id')->unsigned()->default(1); // La categoría 1 no existe como tal. Las que dependan directamente de ella serán categorías principales. La categoría 1 sería la 0, pero no se puede poner ese valor, al ser una clave foránea, ya que no existe registro 0.
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
