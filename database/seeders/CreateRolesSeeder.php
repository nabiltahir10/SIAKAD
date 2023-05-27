<?php

namespace Database\Seeders;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class CreateRolesSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Admin',

            ],
            [
                'id' => 2,
                'name' => 'Guru',
            ],
            [
                'id' => 3,
                'name' => 'Walikelas',
            ],
            [
                'id' => 4,
                'name' => 'User',
            ],
        ];

        foreach ($roles as $key => $role) {
            Roles::create($role);
        }
    }
}
