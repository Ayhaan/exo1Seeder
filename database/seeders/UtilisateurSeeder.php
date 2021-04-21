<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            [ 
             "nom" => "test1",
             "age" => 24,
             "email" => "test@molengeek.com",
             "tel" => "0000",
             "created_at" => now(),
            ],
            [ 
             "nom" => "test2",
             "age" => 24,
             "email" => "test@molengeek.com",
             "tel" => "0000",
             "created_at" => now(),
            ],
            [ 
             "nom" => "test3",
             "age" => 24,
             "email" => "test@molengeek.com",
             "tel" => "0000",
             "created_at" => now(),
            ],
         ]);
    }
}
