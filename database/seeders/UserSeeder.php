<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\MechanicalWorkshop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Admin');

        $user1 = User::create([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Client');
        Client::create([
            'name' => $user1->name,
            'user_id' => $user1->id
        ]);

        $user2 = User::create([
            'name' => 'mecanico',
            'email' => 'mecanico@gmail.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Mechanical');

        MechanicalWorkshop::create([
            'name' => $user2->name,
            'user_id' => $user2->id
        ]);
    }
}
