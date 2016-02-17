<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	    {
	        DB::table('users')->insert([
	        		'name'		=>	'Pedrito Perez',
	        		'email'		=>	'pedrito@gmail.com',
	        		'password'	=>	bcrypt('pedrito'), 
	        		'type'		=>	'member'


	        	]);
	    }
}
