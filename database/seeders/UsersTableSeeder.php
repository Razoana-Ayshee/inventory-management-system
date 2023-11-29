<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name' => 'Razoana',
                'email' => 'razoana@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => '$2a$05$Lj3IDMyKsiuDVW203M8.i.9HOBrI9CvJAP4cJrI5QwB42Pr4pg79y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ayshee',
                'email' => 'ayshee@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => '$2a$05$Lj3IDMyKsiuDVW203M8.i.9HOBrI9CvJAP4cJrI5QwB42Pr4pg79y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
