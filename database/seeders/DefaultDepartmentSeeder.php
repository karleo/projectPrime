<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DefaultDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $defaults = [
            [
                'name'=> 'Admin',
                'code'=> 'admin'
            ],
            [
                'name'=> 'Accounting',
                'code'=> 'acct'
            ],
            [
                'name'=> 'Operations',
                'code'=> 'operations'
            ]
        ];

        Department::query()->truncate();

        if ( !empty($defaults) ) {
            foreach($defaults as $row) {
                Department::create( $row );
                }
        }
    }

}
