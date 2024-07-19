<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->dateTimeBetween('now', '+1 week'),
                'orario_di_arrivo' => $faker->dateTimeBetween('now', '+2 weeks'),
                'codice_treno' => $faker->numberBetween(1000, 9999),  // Genera un codice treno numerico
                'numero_carrozze' => $faker->numberBetween(5, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
