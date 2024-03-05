<?php

namespace Illuminate\Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantSeeder extends Seeder
{
    /**
     * @return void
     */

    public function run()
    {
        $entries = [
            [
                'code_etud' => 'yyeyeye',
                'nom_etud' => 'Kalubi',
                'prenom_etud' => 'William',
                'tel_etud' => '684213220',
                'mail_etud' => 'dems.vie@gmail.com',
                'anne_etud' => '1962'
            ]
        ];

        $tableName = (new Etudiant())->getTable();
        foreach ($entries as $entry) {
            DB::table($tableName)->insert($entry);
        }
    }
}
