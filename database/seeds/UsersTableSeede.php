<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //verification si l'utilisateur Diallo existe
        $user = User::where('email', 'dihambouroslyn@gmail.com')->first();

        if(!$user){
            User::create([
                'name' => 'Sagesse',
                'email' =>'dihambouroslyn@gmail.com',
                'password' => Hash::make('passer'),
                'role' => 'admin',
            ]);
        }
    }
}
