<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrutor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_instrutor');
            $table->dateTime('data_nacimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('fone_celular');
            $table->string('email_aluno');
            $table->string('mini_curiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instrutor');
    }
}
