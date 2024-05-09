<?php

namespace Database\Seeders;

use App\Models\Carros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Carros::create([
               
                'modelo' => 'Carro ' . $i,
                'ano' => '20'. $i,
                'marca' => 'marca ' . $i ,
                'cor' => 'cor '. $i,
                'peso' => 'peso ' . $i,
                'potencia' => 'potencia ' . $i,
                'descricao' => 'descricao ' . $i,
                'valor'  => '40.00'

            ]);
        }
    }
}
