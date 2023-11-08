<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChoiceShipmentType;

class DefaultChoiceShipmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $default=[
            ['name'=>'SPECIAL'],
            ['name'=>'NORMAL'],
            ['name'=>'SPECIAL/NORMAL'],
        ];

        ChoiceShipmentType::truncate();
        if ( !empty($default) ) {
            foreach($default as $row) {
                ChoiceShipmentType::create( $row );
                }
        }
    }
}
