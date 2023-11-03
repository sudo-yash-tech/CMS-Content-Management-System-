<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {

        $user = User::where('email', 'imyashr@gmail.com')->first();

        if(!$user)
        {
            User::create([

                'name' => 'MYASH',
                'email' => 'imyashr@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('Devil@r123')
            ]);
        }

        }


}
