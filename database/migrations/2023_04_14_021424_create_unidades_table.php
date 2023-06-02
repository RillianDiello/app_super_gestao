<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });


        // add relationship with products

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');
        });

        // add relationship with products details
        Schema::table('products_details', function (Blueprint $table) {
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_unit_id_foreign');
            $table->dropColumn('unit_id');
        });

        Schema::table('products_details', function (Blueprint $table) {
            $table->dropForeign('products_details_unit_id_foreign');
            $table->dropColumn('unit_id');
        });

        Schema::dropIfExists('units');
    }
}
