<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SeedSubscribeTypesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $types = [
            [
                'title' => 'Pay As You Go',
                'description' => 'Great for freelance developers or authors.',
                'price' => 19,
                'price_type' => 'annual'
            ],
            [
                'title' => 'Silver',
                'description' => 'Ideal for small to medium sized agencies and studios.',
                'price' => 190,
                'price_type' => 'annual'
            ],
            [
                'title' => 'Gold',
                'description' => 'For medium to large agencies who work on many projects at once.',
                'price' => 1290,
                'price_type' => 'annual'
            ],
        ];
        DB::table('subscribe_types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('subscribe_types')->truncate();
    }
}
