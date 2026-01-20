<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'セット、ホールケーキ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '焼き菓子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'シフォンケーキ、キッシュ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'パン',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);
    }
}
