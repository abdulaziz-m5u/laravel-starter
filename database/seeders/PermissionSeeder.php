<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['title' => 'user_management_access',],
            ['title' => 'permission_access',],
            [ 'title' => 'role_access',],
            [ 'title' => 'user_access',],
            ['title' => 'general_access']
        ];

        Permission::insert($permissions);
    }
}
