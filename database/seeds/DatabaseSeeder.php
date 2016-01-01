<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
                ['name' => 'Sheldon Nofer', 'email' => 'swnofer@gmail.com', 'password' => Hash::make('password'), 'group' => '1'],
                ['name' => 'William Nofer', 'email' => 'bill.nofer.gmail.com', 'password' => Hash::make('password'), 'group' => '2'],
                ['name' => 'Member Role', 'email' => 'member@test.com', 'password' => Hash::make('password'), 'group' => '3']
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}
