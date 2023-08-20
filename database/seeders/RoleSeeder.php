<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'admin'
        ]);

        Role::create([
            'role' => 'user'
        ]);
    }
}
