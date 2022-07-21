<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_1=Permission::create(['name'=>'view_dash']);
        $permission_2=Permission::create(['name'=>'manage_dash']);

        $permission_2->assignRole('user');  
    
    }
}
