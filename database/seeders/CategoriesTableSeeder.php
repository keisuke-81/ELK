<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
        [
        'name' => 'アート',
        ],
        [
        'name' => '科学（実験など）',

         ],
        [
        'name' => 'ダンス',
        ],
        [
        'name' => 'スポーツ',

          ],
          [
        'name' => '音楽',
        ],
        [
        'name' => 'プログラミング',

         ],
        [
        'name' => '英語',
        ],
        [
        'name' => '工作',

          ],
          [
        'name' => '季節イベント',

          ],
          [
        'name' => '伝統文化',
        ],
        [
        'name' => '読書',

         ],
        [
        'name' => '料理、食育',
        ],
        [
        'name' => '社会',

          ],
    ]);
    }
}
