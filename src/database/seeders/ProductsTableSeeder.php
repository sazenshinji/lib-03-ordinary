<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'Giftセット (小)',
            'category_id' => 1,                                     //セット、ホールケーキ
            'image_path' => 'images/11_Giftセット.jpg',
            'price' => 1500,
            'description' => 'ちょっとした 贈り物に最適。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'くまさん、うさぎさんセット',
            'category_id' => 1,                                     //セット、ホールケーキ
            'image_path' => 'images/12_くまさんうさぎさん.jpg',
            'price' => 1500,
            'description' => 'かわいい 贈り物。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'シフォン ケーキホール販売',
            'category_id' => 1,                                     //セット、ホールケーキ
            'image_path' => 'images/13_シフォンケーキ_ホール販売.jpg',
            'price' => 4000,
            'description' => 'シフォンケーキをフォール販売します。予約してください。',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '焼き菓子 1',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/21_焼き菓子1.jpg',
            'price' => 250,
            'description' => 'ｘｘｘな 焼き菓子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '焼き菓子 2',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/22_焼き菓子2.jpg',
            'price' => 300,
            'description' => 'ｘｘｘな 焼き菓子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '焼き菓子 3',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/23_焼き菓子3.jpg',
            'price' => 350,
            'description' => 'ｘｘｘな 焼き菓子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '焼き菓子 4',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/24_焼き菓子4.jpg',
            'price' => 400,
            'description' => 'ｘｘｘな 焼き菓子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '焼き菓子 5',
            'category_id' => 2,                                 //焼き菓子
            'image_path' => 'images/25_焼き菓子5.jpg',
            'price' => 300,
            'description' => 'ｘｘｘな 焼き菓子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'XXXのシフォンケーキ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/31_シフォンケーキ.jpg',
            'price' => 500,
            'description' => 'ｘｘｘな シフォンケーキ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '□□のシフォンケーキ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/32_シフォンケーキ.jpg',
            'price' => 500,
            'description' => '□□□な シフォンケーキ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '□□のキッシュ',
            'category_id' => 3,                                 //シフォンケーキ、キッシュ
            'image_path' => 'images/33_キッシュ.jpg',
            'price' => 600,
            'description' => '□□□な キッシュ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ソーセージデニッシュ',
            'category_id' => 4,                                 //パン
            'image_path' => 'images/41_ソーセージデニッシュ.jpg',
            'price' => 600,
            'description' => 'おいしいソーセージデニッシュ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '〇〇〇パン',
            'category_id' => 4,                                 //パン
            'image_path' => 'images/42_〇〇〇パン.jpg',
            'price' => 600,
            'description' => '焼きたて〇〇〇パン',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('products')->insert($param);
    }
}
