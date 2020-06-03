<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('user_id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string("telefone");
            $table->string('cpf')->unique();
            $table->date('data_nascimento');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado');
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
