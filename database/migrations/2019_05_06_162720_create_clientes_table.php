<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('cli_id');
            $table->string('cli_nome', 255);
            $table->integer('cli_idade')->unsigned();
            $table->integer('cep')->unsigned();
            $table->string('cli_rua', 255);
            $table->string('cli_numero', 255);
            $table->string('cli_bairro', 255);
            $table->string('cli_cidade', 255);
            $table->string('cli_estado', 255);
            
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
        Schema::dropIfExists('clientes');
    }
}
