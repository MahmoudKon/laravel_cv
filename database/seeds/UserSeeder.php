<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'      => 'admin',
            'email'         => 'admin@app.com',
            'password'      => Hash::make(123),
            'approve'       => 1,
            'permissions'   => 'admin'
        ]);
    }
}
