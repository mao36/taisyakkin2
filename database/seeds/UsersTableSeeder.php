<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'user_name' => 'test' . $i,
                'email' => 'test' . $i . '@gmail.com',
                'password' => Hash::make('password')
            ]);
        }
    }
}
