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

        $this->call(admin_user::class);
        $this->call(icono_categoria::class);
        $this->call(unEventoPrueba::class);
        factory(App\Event::class,30)->create();
    }
}
