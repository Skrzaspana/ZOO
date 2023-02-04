<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert(
            [
                [
                    'name' => 'Jan', 'id_role' => 1, 'email' => 'jan@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'John', 'id_role' => 2, 'email' => 'john@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Karol', 'id_role' => 3, 'email' => 'karol@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Martyna', 'id_role' => 4, 'email' => 'martyna@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Mateusz', 'id_role' => 4, 'email' => 'mateusz@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Paweł', 'id_role' => 4, 'email' => 'pawel@email.com', 'password' => Hash::make('1234')
                ]
            ],
            'name'
        );
    }
}
