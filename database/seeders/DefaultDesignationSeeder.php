<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DefaultDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $defaults= [
            ['name' => 'Finance Manager' , 'code' => '' ],
            ['name' => 'Operation Manager' , 'code' => '' ],
            ['name' => 'Warehouse Manager' , 'code' => '' ],
            ['name' => 'General Manager' , 'code' => '' ],
            ['name' => 'Sale Manager' , 'code' => '' ],
        ];

        Designation::query()->truncate();

        if ( !empty($defaults) ) {
            foreach($defaults as $row) {
                Designation::create( $row );
                }
        }
    }
}
