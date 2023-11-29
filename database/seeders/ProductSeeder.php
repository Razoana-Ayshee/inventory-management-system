<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();

        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'iphone 15 pro',
                'quantity' => 2,
                'user_id' => 1,
                'price' => '90000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'airpods pro',
                'quantity' => 2,
                'user_id' => 1,
                'price' => '20000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'pixel 8 pro',
                'quantity' => 2,
                'user_id' => 1,
                'price' => '148000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
