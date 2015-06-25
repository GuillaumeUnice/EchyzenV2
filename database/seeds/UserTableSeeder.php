<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        User::create(array('username' => 'echyzen', 'email' => 'guillaume.unice@gmail.com',
            'password' => Hash::make('azerty'), 'role' => config('role.administrator'),
            'confirmed' => 1));

    }
}
