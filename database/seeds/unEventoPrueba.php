<?php

use Illuminate\Database\Seeder;

class unEventoPrueba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('events')->insert([
            //'id' => 1,
            'name' => 'Evento', 
            'description' => 'Evento para probar busqueda por nombre y probar carga de imagen',
            'initial_date' => '2019-12-01', // new DateTime(2019, 11, 28),
            'ending_date' => '2019-12-01',
            'price' => 350,
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'storage\FotoPortada_in.jpeg'
        ]);
    }
}
