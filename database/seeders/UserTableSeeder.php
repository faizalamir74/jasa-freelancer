<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'              => 'John Doe',
                'email'             => 'john@mail.com',
                'password'          => Hash::make('Admin@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'name'              => 'Jane Doe',
                'email'             => 'jane@mail.com',
                'password'          => Hash::make('Admin@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ]
        ];

        User::insert($user);
    }
}
