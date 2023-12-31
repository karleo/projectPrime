<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class DefaultGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $defaults = [
            [
                'name'=> 'Male',
            ],
            [
                'name'=> 'Female',
            ],
            [
                'name'=> 'I dont want to mention',
            ]
        ];

        Gender::query()->truncate();

        if ( !empty($defaults) ) {
            foreach($defaults as $row) {
                Gender::create( $row );
                }
        }
    }
}
