<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert(
        [
            'name'=>Str::random(5),
            'class'=>Str::random(5),
            'roll'=>Str::random(5)

        ]
            );
    }
}
