<?php

use App\User;
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
        factory(User::class, 30)->create();

        //para crear un usuario especifico
        User::Create([
        	'name' => 'Rodrigo', 
        	'email' => 'r@r.com',
        	'password' => bcrypt ('123'),
        	'remember_token' => str_random(10),
        ]);
    }
}
