<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->id();
            $table->string("caminho")->nullable();
            /*
                0 => Queijos e Embutidos
                1 => Entradas
                2 => Bruschettas
                3 => Principais
                4 => Ambiente
                5 => Pratos
                6 => Vinhos
                7 => Happy Hour
            */
            $table->tinyInteger("categoria")->default(0);
            $table->tinyInteger("ativo")->default(0);
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
        Schema::dropIfExists('galerias');
    }
}
