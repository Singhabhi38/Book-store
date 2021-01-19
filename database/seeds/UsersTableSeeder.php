<?php

use Illuminate\Database\Seeder;
use Illuminate\Suport\Facades\DB;
Class UsersTableSeeder extends Seeder {
 
    public function run()
    {
  DB::table('users')->insert(['email' => 'member@email.com',
  'password' => Hash::make('password'),
  'name' => 'John Doe',
  'admin'=>0]);
  
User::create(array(
            'email' => 'member@email.com',
            'password' => Hash::make('password'),
            'name' => 'John Doe',
            'admin'=>0
        ));
        
  User::create(array(
            'email' => 'admin@store.com',
            'password' => Hash::make('adminpassword'),
            'name' => 'Jeniffer Taylor',
            'admin'=>1
        ));  

    }
 
}
