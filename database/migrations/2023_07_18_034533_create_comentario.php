<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentario extends Migration
{
    public function up() {
        Schema::create('comentario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->text(200);
            $table->timestamps();

            $table->foreign('post_id')
              ->references('id')->on('posts');
        });
    }
    public function down(){
        Schema::dropIfExists('comentarios');
    }
}

