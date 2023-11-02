<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $defaults = [
            [
                'name' => 'Administrator',
                'email' => 'admin@kargo.app',
                'password' => Hash::make('admin1234')
            ],
        ];

        User::query()->truncate();

        if ( !empty($defaults) ) {
            foreach($defaults as $row) {
                User::create( $row );
            }
        }

    }
}
