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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string('Nome Aluno', 255);
            $table->date('Data de Nascimento', 255);
            $table->float('CPF');
            $table->float('RG');
            $table->string('Nacionalidade', 255);
            $table->string('Email', 255);
            $table->string('Endereço', 255);
            $table->string('Complemento', 255);
            $table->string('Cidade', 255);
            $table->string('Estado', 255);
            $table->float('CEP');
            $table->string('Sexo', 255);
            $table->string('Estado Civil', 255);
            $table->string('Ingressão', 255);
            $table->string('Período', 255);
            $table->date('Conclusão Ensino Medio', 255);
            $table->float('Telefone');
            $table->float('Celular');
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
        Schema::dropIfExists('matriculas');
    }
};