<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PersonaFisicaSeeder extends Seeder
{
    public function run()
    {
        // Ejemplo de 3 personas de prueba
        DB::table('personas_fisicas')->insert([
            [
                'nombre' => 'Juan',
                'apellido_paterno' => 'Pérez',
                'apellido_materno' => 'López',
                'rfc' => 'PELJ800101ABC',
                'curp' => 'PELJ800101HDFPRN09',
                'fecha_nacimiento' => '1980-01-01',
                'email' => 'juan.perez@example.com',
                'telefono' => '5512345678',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'María',
                'apellido_paterno' => 'González',
                'apellido_materno' => 'Sánchez',
                'rfc' => 'GOSM850215XYZ',
                'curp' => 'GOSM850215MDFNRN01',
                'fecha_nacimiento' => '1985-02-15',
                'email' => 'maria.gonzalez@example.com',
                'telefono' => '5587654321',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido_paterno' => 'Ramírez',
                'apellido_materno' => 'Torres',
                'rfc' => 'RATC900320DEF',
                'curp' => 'RATC900320HDFMRR02',
                'fecha_nacimiento' => '1990-03-20',
                'email' => 'carlos.ramirez@example.com',
                'telefono' => '5511223344',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}