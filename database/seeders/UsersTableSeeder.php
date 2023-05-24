<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'              => 'Tristan Hans Pratama',
                'email'             => 'tristanpratama7@gmail.com',
                'password'          => Hash::make('12345678'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'name'              => 'Pramudya Lutfiansyah',
                'email'             => 'pramudya1@gmail.com',
                'password'          => Hash::make('12345678'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
        ];

        User::insert($users);
    }
}
