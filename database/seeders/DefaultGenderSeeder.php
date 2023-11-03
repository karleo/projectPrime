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
                'gender' => 'Male',
                'code' => 'male'
            ],
            [
                'gender' => 'female',
                'code' => 'female'
            ],
            [
                'gender' => 'I dont want to know',
                'code' => 'idk'
            ],
        ];

        Gender::query()->truncate();

        if ( !empty($defaults) ) {
            foreach($defaults as $row) {
                Gender::create( $row );
            }
        }
    }
}
