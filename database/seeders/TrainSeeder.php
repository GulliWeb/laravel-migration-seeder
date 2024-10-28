<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
// Importo la libreria Faker per creare dei dati casuali (e falsi) per popolare la mia tabella
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Uso un ciclo for per generare dati finti tramite Faker per popolare la mia tabella.
        for($i = 0; $i < 100; $i++){
            DB::table('trains')->insert([
                'Azienda' => $faker->company,
                'Stazione_partenza' => $faker->city,
                'Stazione_arrivo' => $faker->city,
                'Orario_partenza' => $faker->time(),
                'Orario_arrivo' => $faker->time(),
                'Cod_treno' => $faker->regexify('[A-Z]{3}[0-9]{3}'),
                'Num_carrpzze' => $faker->numberBetween(3, 20),
                'In_orario' => $faker->boolean,
                'Cancellato' => $faker->boolean
            ]);
        }
    }
}