<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admin_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            //'id' => '',
            'name' => 'Alejandro',
            'surname'=> 'Villa',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('12345678'),
            'role' => 1,
            'verified' => 0,
            'token'=> null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
