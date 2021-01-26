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
            $table->enum('scope', ['U', 'A', 'M'])->default('U'); // (U)susario, (A)dministrador, (M)anager
            $table->string('first_name');
            $table->string('surname');
            $table->string('username')->unique(); // Login
            $table->string('avatar')->nullable()->default('no_avatar.jpg'); // Login
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('theme')->nullable()->default('standard'); // El nombre del grupo de CSS que da aspecto a las vistas.
            $table->char('language',2)->default('es');
            $table->string('country_code', 4)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->bigInteger('menu_desplegado')->nullable()->unsigned()->default(0); // El menú que aparece desplegado, mostrando todas sus opciones.
            $table->bigInteger('opcion_seleccionada')->nullable()->unsigned()->default(0);
            $table->boolean('menu_bar_deployed')->nullable()->default(true); // Se refiere a si está desplegada la sidebar lateral de menús. Si la barra de menús es horizontal, no tiene efecto.
            $table->string('token_login')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
