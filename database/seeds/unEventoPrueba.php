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
            'id' => 1,
            'name' => 'Festival de tango', 
            'description' => 'Conciertos, milongas, clases de baile y las Rondas Clasificatorias y las Semifinales del Mundial de Baile.',
            'initial_date' => '2019-11-28', // new DateTime(2019, 11, 28),
            'ending_date' => '2019-11-30',
            'price' => 350,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
