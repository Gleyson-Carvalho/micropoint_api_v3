<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',100);
            $table->string('pacode',100)->nullable();
            $table->string('carga_horaria',100)->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->boolean('finalizado')->default(false);
            $table->string('modulo1',100)->nullable();
            $table->string('modulo2',100)->nullable();
            $table->string('modulo3',100)->nullable();
            $table->string('modulo4',100)->nullable();
            $table->string('modulo5',100)->nullable();
            $table->string('modulo6',100)->nullable();
            $table->string('modulo7',100)->nullable();
            $table->string('modulo8',100)->nullable();
            $table->string('modulo9',100)->nullable();
            $table->string('modulo10',100)->nullable();
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
        Schema::dropIfExists('cidades');
    }
}
