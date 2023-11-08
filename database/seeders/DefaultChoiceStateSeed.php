<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChoiceState;

class DefaultChoiceStateSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $defaults = [
            ['name'=>'FOR OUT', 'code'=>'FO' ],
            ['name'=>'PENDING', 'code'=>'PND' ],
            ['name'=>'CARGO FLEX', 'code'=>'CF' ],
            ['name'=>'FOR INVOICE-BOE-SEND DOCS- FOR OUT', 'code'=>'' ],
            ['name'=>'BOE-SEND DOCS-FOR OUT', 'code'=>'' ],
            ['name'=>'SEND DOCS-FOR OUT', 'code'=>'' ],
            ['name'=>'DONE', 'code'=>'' ],
        ];

        ChoiceState::query()->truncate();

        if ( !empty($defaults) ) {
            foreach($defaults as $row) {
                ChoiceState::create( $row );
                }
        }
    }
}
