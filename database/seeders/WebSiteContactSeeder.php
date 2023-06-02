<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContacto;

class WebSiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $contato = new SiteContacto([
//            'name' => 'Meu nome',
//            'phone' => '6799898989',
//            'email' => 'interno@sg.com.br',
//            'motivo_contato' => 1,
//            'message' => 'Seja bem Vindo'
//        ]);
//        $contato->save();
        \App\Models\SiteContacto::factory()->count(100)->create();

    }
}
