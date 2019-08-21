<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = New User;
        $usr->name = 'August Good';
        $usr->email = 'august@gmail.com';
        $usr->password = bcrypt('admin');
        $usr->birthdate = '1990-08-20';
        $usr->gender = 'Male';
        $usr->role = 'Admin';
        $usr->save();

        User::create(array(
        	'name' => 'Michele Cantrell',
        	'email' => 'michelle@gmail.com',
        	'password' => bcrypt('editor'),
        	'birthdate' => '1980-10-20',
        	'gender' => 'Male',
        	'role' => 'Editor'
        ));

        // Metodo Factory
        factory(User::class, 100)->create();

    }
}
