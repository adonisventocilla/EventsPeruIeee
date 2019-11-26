<?php

use Illuminate\Database\Seeder;

class CommitteeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $committeetypes = [
            'Comité de finanzas',
            'Comité de logística',
            'Comité de ponencias',
            'Comité de ponentes',
            'Comité de participantes',
            'Comité de invitados especiales',
            'Comité de patrocinios',
            'Comité de image',
            'Comité de medios de patrocinios',
            'Comité de transportación',
            'Comité de lugares para el evento',
            'Comité de servicios generales',
            'Comité de eventos sociales',
            'Comité de premios y reconocimientos',
            'Comité de contingencias'
        ];
        foreach ($committeetypes as $committeetype) {
            DB::table('committeetype')->insert(
                ['name' => $committeetype]
            );
        }
        
    }
}
