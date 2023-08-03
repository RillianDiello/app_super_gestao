<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->unsignedBigInteger('usuario_id');
            $table->text(500);
            $table->timestamps();

            $table->foreign('usuario_id')
              ->references('id')->on('usuarios');
        });
    }
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
