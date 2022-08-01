<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' => Str::random(10),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' => Str::random(10),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
