<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('endereco')->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cep')->nullable();
            $table->string('complemento')->nullable();
            $table->string('estado_civil')->nullable();
            $table->integer('rg')->nullable();
            $table->string('orgao_rg')->nullable();
            $table->string('uf_rg')->nullable();
            $table->string('cpf',11)->nullable();
            $table->string('pai')->nullable();
            $table->string('mae')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('telefone_resp')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('raca')->nullable();
            $table->string('necessidades')->nullable();
            $table->string('necessidades_descricao')->nullable();
            $table->integer('altura')->nullable();
            $table->integer('peso')->nullable();
            $table->string('tipo_sangue')->nullable();
            $table->string('fator_rh')->nullable();
             $table->string('alergia')->nullable();
              $table->string('remedio')->nullable();
               $table->string('alergia_medicamento')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrantes');
    }
}
