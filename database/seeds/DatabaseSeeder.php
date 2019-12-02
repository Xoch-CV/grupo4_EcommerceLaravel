<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(unEventoPrueba::class);
<<<<<<< HEAD
        factory(App\Event::class,15)->create();
        $this->call(datosCategorias::class)->create();
        
=======
        //factory(App\Event::class,15)->create();
        //$this->call(icono_categoria::class);
        //$this->call(admin_user::class);
>>>>>>> 32bf8bcf3bf236b6a2a112ff8370c19436502a8e
    }
}
