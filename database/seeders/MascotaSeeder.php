<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MascotaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mascotas')->insert([
            ['nombre' => 'Paco',     'tipo' => 'Loro',     'edad' => 2,  'raza' => 'Guacamayo',      'peso' => 0.9,  'fecha_adopcion' => Carbon::parse('2023-01-15')],
            ['nombre' => 'Michi',    'tipo' => 'Gato',     'edad' => 3,  'raza' => 'Siames',         'peso' => 4.2,  'fecha_adopcion' => Carbon::parse('2022-10-20')],
            ['nombre' => 'Luna',     'tipo' => 'Perro',    'edad' => 1,  'raza' => 'Labrador',       'peso' => 12.5, 'fecha_adopcion' => Carbon::parse('2024-03-12')],
            ['nombre' => 'Rocky',    'tipo' => 'Perro',    'edad' => 5,  'raza' => 'Bulldog',        'peso' => 14.0, 'fecha_adopcion' => Carbon::parse('2021-07-09')],
            ['nombre' => 'Nemo',     'tipo' => 'Pez',      'edad' => 1,  'raza' => 'Pez Payaso',     'peso' => 0.1,  'fecha_adopcion' => Carbon::parse('2023-06-01')],
            ['nombre' => 'Polly',    'tipo' => 'Loro',     'edad' => 4,  'raza' => 'Amazonas',       'peso' => 0.8,  'fecha_adopcion' => Carbon::parse('2020-12-11')],
            ['nombre' => 'Bolt',     'tipo' => 'Perro',    'edad' => 2,  'raza' => 'Pastor Alemán',  'peso' => 20.0, 'fecha_adopcion' => Carbon::parse('2022-08-05')],
            ['nombre' => 'Kira',     'tipo' => 'Gato',     'edad' => 1,  'raza' => 'Angora',         'peso' => 3.5,  'fecha_adopcion' => Carbon::parse('2023-01-10')],
            ['nombre' => 'Blue',     'tipo' => 'Pez',      'edad' => 2,  'raza' => 'Betta',          'peso' => 0.2,  'fecha_adopcion' => Carbon::parse('2023-05-25')],
            ['nombre' => 'Nala',     'tipo' => 'Gato',     'edad' => 4,  'raza' => 'Maine Coon',     'peso' => 6.0,  'fecha_adopcion' => Carbon::parse('2020-09-18')],
            ['nombre' => 'Max',      'tipo' => 'Perro',    'edad' => 3,  'raza' => 'Pug',            'peso' => 8.5,  'fecha_adopcion' => Carbon::parse('2021-11-20')],
            ['nombre' => 'Coco',     'tipo' => 'Conejo',   'edad' => 2,  'raza' => 'Enano Holandés', 'peso' => 1.3,  'fecha_adopcion' => Carbon::parse('2022-02-14')],
            ['nombre' => 'Charlie',  'tipo' => 'Loro',     'edad' => 5,  'raza' => 'Cacatúa',        'peso' => 1.0,  'fecha_adopcion' => Carbon::parse('2020-03-10')],
            ['nombre' => 'Bambi',    'tipo' => 'Conejo',   'edad' => 1,  'raza' => 'Rex',            'peso' => 1.1,  'fecha_adopcion' => Carbon::parse('2023-04-22')],
            ['nombre' => 'Toby',     'tipo' => 'Perro',    'edad' => 6,  'raza' => 'Beagle',         'peso' => 10.2, 'fecha_adopcion' => Carbon::parse('2019-07-15')],
        ]);
    }
}
