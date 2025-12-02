<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        DB::table('personas')->insert([
            [
                'dni' => '48277850',
                'nombre' => 'Morena',
                'apellido' => 'Rivero',
                'ciudad' => 'Posadas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Puedes agregar más ejemplos si quieres
            [
                'dni' => '30123456',
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'ciudad' => 'Corrientes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dni' => '35987654',
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'ciudad' => 'Resistencia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}