<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_curso');
            $table->integer('id_aluno');
            $table->integer('id_instrutor');
            $table->dateTime('data_matricula');
            $table->integer('nota1');
            $table->integer('nota2');
            $table->dateTime('data_certificacao');
            $table->integer('id_certificacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricula');
    }
}
