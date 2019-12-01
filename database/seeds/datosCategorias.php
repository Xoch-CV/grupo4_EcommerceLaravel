<?php

use Illuminate\Database\Seeder;

class datosCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Conciertos', 
            'created_at' => now(),
            'updated_at' => now(),
            'icono' => 'fas fa-compact-disc fa-4x iconos'
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Cine', 
            'created_at' => now(),
            'updated_at' => now(),
            'icono' => 'fas fa-film fa-4x iconos'
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Shows', 
            'created_at' => now(),
            'updated_at' => now(),
            'icono' => 'fas fa-theater-masks fa-4x iconos'
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Deporte', 
            'created_at' => now(),
            'updated_at' => now(),
            'icono' => 'fas fa-futbol fa-4x iconos'
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Gastronomia', 
            'created_at' => now(),
            'updated_at' => now(),
            'icono' => 'fas fa-hamburger fa-4x iconos'
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Muestras', 
            'created_at' => now(),
            'updated_at' => now(),
            'icono' => 'fas fa-palette fa-4x iconos'
        ]);
    }
}
