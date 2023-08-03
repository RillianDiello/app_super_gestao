<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuario extends Migration
{
    public function up()
    {
        Schema::create('minha_primeira_migracao', function (Blueprint $table
        ) {
            $table->id();
            $table->string('nome', 50);
            $table->string('email', 30);
        });
    }

//    public function down()
//    {
//        Schema::dropIfExists('minha_primeira_migracao');
//    }

    public function down() {
        Schema::create('nome_da_tabela', function (Blueprint $table
        ) {
            $table->dropColumn('nome_da_coluna');
        });
    }
}
