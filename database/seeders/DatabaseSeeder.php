<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(SupplierSeeder::class);
       //         $this->call(WebSiteContactSeeder::class);
        $this->call(MotivoContatosSeeder::class);

    }
}
