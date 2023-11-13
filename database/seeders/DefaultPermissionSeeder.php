<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DefaultPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permission = [
            ['name' => 'department list'],
            ['name' => 'department create'],
            ['name' => 'department edit'],
            ['name' => 'department delete'], 
        ];

  

        foreach($permission as $row){
            Permission::create($row);
        }

    }
}
