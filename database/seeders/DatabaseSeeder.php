<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

//        $entries = [
//            [
//                'code_etud' => 'yyeyeye',
//                'nom_etud' => 'Kalubi',
//                'prenom_etud' => 'William',
//                'tel_etud' => '684213220',
//                'mail_etud' => 'dems.vie@gmail.com',
//                'anne_etud' => '1962'
//            ]
//        ];
//
//        $tableName = (new Etudiant())->getTable();
//        foreach ($entries as $entry) {
//            DB::table($tableName)->insert($entry);
//        }

    }
}
