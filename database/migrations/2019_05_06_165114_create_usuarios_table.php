<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('usu_id');
            $table->string('usu_usuario', 255);
            $table->string('usu_email', 255);
            $table->string('usu_senha', 255);
            $table->bigInteger('usu_cli_id')->unsigned();
            $table->timestamps();
        });
            
        Schema::table('usuarios', function($table) {
            $table->foreign('usu_cli_id')->references('cli_id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
