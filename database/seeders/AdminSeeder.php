<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Wojciech',
                'email' => 'www@www.pl',
                'password' => Hash::make('12341234'),
                'role' => UserRoleEnum::ADMIN,
            ]
        );
    }
}
