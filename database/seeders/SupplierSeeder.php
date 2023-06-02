<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // isntanciando o objeto
        $supplier = new Supplier([
            'name'=> 'Rillian',
            'website' =>'rillianwebsite',
            'phone' => '9999598',
            'email' => 'rillian@email.com',
            'uf' =>'MS'
        ]);
        $supplier->save();

        Supplier::create([
            'name'=> 'Rillianss',
            'website' =>'rillianwebsite3',
            'phone' => '9999598432856',
            'email' => 'rilliansf@email.com',
            'uf' =>'SP'
        ]);

        DB::table('suppliers')->insert([
            'name'=> 'Rillian2',
            'website' =>'rillianwebsite2',
            'phone' => '9999598856',
            'email' => 'rillian2@email.com',
            'uf' =>'SP'
        ]);
    }
}
