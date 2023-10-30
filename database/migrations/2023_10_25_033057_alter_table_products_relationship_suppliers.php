<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTableProductsRelationshipSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $supplierId = DB::table('suppliers')->insertGetId([
              'name' => 'Fornecedor Padrao',
              'website' => 'fornecedorpadrao.com.br',
              'phone' => '+556799462784',
              'email' => 'contato@fornecedorpadrao.com.br',
              'uf' => 'SP'
            ]);

            $table->unsignedBigInteger('supplier_id')
              ->default($supplierId)
              ->after('id');

            $table->foreign('supplier_id')->references('id')
              ->on('suppliers');
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
            $table->dropForeign('products_supplier_id_foreign');
            $table->dropColumn('supplier_id');
        });
    }
}
