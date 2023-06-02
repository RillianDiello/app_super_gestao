<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MotivoContato;

class MotivoContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::create(['motivo_contato' =>'Doubt']);
        MotivoContato::create(['motivo_contato' =>'Acknowledgment']);
        MotivoContato::create(['motivo_contato' =>'Suggest']);
        MotivoContato::create(['motivo_contato' =>'Reclamation']);
        MotivoContato::create(['motivo_contato' =>'Other']);
    }
}
