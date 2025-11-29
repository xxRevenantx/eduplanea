<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{

    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Docente']);



        Permission::create(['name' => 'admin.dashboard'])->syncRoles($role1);
        Permission::create(['name' => 'docente.dashboard'])->syncRoles($role2);



    }
}
