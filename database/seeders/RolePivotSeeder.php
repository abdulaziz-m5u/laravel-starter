<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            
            1 => [
                'permissions' => [1, 2, 3, 4],
            ],
            2 => [
                'permissions' => [5],
            ],

        ];

        foreach ($permissions as $id => $permission) {
            $role = Role::find($id);

            foreach ($permission as $key => $ids) {
                $role->{$key}()->sync($ids);
            }
        }
    }
}
