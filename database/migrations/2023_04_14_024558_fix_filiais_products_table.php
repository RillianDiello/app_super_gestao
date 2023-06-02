<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixFiliaisProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('branchs', function (Blueprint $table) {
           $table->id();
           $table->string('branch', 30);
           $table->timestamps();
        });

        Schema::create('product_branchs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('product_id');
            $table->double('price_sale', 8,2);
            $table->integer('minimal_stock');
            $table->integer('maximal_stock');
            $table->timestamps();

            //contraints
            $table->foreign('branch_id')->references('id')->on('branchs');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price_sale', 'minimal_stock', 'maximal_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // add coluns removed
        Schema::table('products', function (Blueprint $table) {
            $table->float('price_sale', 8,2)->default(0.01);
            $table->integer('minimal_stock')->default(1);
            $table->integer('maximal_stock')->default(1);
        });

        Schema::dropIfExists('product_branchs');

        Schema::dropIfExists('branchs');

    }
}
