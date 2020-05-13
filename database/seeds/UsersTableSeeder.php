<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'id'  => 1,
        	'username' => 'admin',
        	'password'  => bcrypt('admin'),
        	'level' => 'admin'
		]);        

    }
}
