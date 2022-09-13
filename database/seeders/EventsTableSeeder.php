<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('events')->insert([
        ['id' => '1',
        'title' => 'kids',
        'school_id' => '1',
        'image_id' => '1',
        'area' => '福岡',
        'target_min_age' => '4',
        'target_max_age' => '7',
        'content' => 'good!event',
        'content_summary' => 'good',
        'price' => '100',
        'price_free' => '1',
        'my_event' => '1',
        'event_url' => 'http://localhost/',
        'status' => '0',
      
        ],
        ['id' => '2',
        'title' => 'kids2',
        'school_id' => '1',
        'image_id' => '2',
        'area' => '福岡',
        'target_min_age' => '1',
        'target_max_age' => '2',
        'content' => 'good!event',
        'content_summary' => 'good',
        'price' => '100',
        'price_free' => '1',
        'my_event' => '1',
        'event_url' => 'http://localhost/',
        'status' => '0',

        ],
        ['id' => '3',
        'title' => 'kids3',
        'school_id' => '1',
        'image_id' => '3',
        'area' => '福岡',
        'target_min_age' => '1',
        'target_max_age' => '2',
        'content' => 'good!event',
        'content_summary' => 'good',
        'price' => '0',
        'price_free' => '0',
        'my_event' => '1',
        'event_url' => 'http://localhost/',
        'status' => '0',

        ],
        ['id' => '4',
        'title' => 'kids4',
        'school_id' => '1',
        'image_id' => '1',
        'area' => '福岡',
        'target_min_age' => '1',
        'target_max_age' => '2',
        'content' => 'good!event',
        'content_summary' => 'good',
        'price' => '0',
        'price_free' => '0',
        'my_event' => '0',
        'event_url' => 'http://localhost/',
        'status' => '0',

        ],
        ['id' => '5',
        'title' => 'kids5',
        'school_id' => '1',
        'image_id' => '2',
        'area' => '福岡',
        'target_min_age' => '1',
        'target_max_age' => '2',
        'content' => 'good!event',
        'content_summary' => 'good',
        'price' => '0',
        'price_free' => '0',
        'my_event' => '0',
        'event_url' => 'http://localhost/',
        'status' => '0',

        ],
        ['id' => '6',
        'title' => 'kids6',
        'school_id' => '1',
        'image_id' => '3',
        'area' => '福岡',
        'target_min_age' => '1',
        'target_max_age' => '2',
        'content' => 'good!event',
        'content_summary' => 'good',
        'price' => '1',
        'price_free' => '1',
        'my_event' => '0',
        'event_url' => 'http://localhost/',
        'status' => '0',

    ],
    ]);
    }
}
