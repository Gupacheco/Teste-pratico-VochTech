<?php

namespace Database\Seeders;

use App\Models\Cargo_Colaborador;
use Database\Factories\Cargo_ColaboradorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cargo_ColadboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cargo_Colaborador::factory(100)->create();
    }
}
