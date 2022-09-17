<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('schools')->insert([
        [
        'school_name' => 'kidsworld1',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld2',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld3',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld4',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld5',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld6',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld7',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],
        [
        'school_name' => 'kidsworld8',
        'school_url' => 'https://www.kidsweekend.jp/portal
',
        'school_address' => '福岡県福岡市大名',
        'about' => 'kidsworld',
        'school_tel' => '080000000',
        ],



    ]);
    }
}
