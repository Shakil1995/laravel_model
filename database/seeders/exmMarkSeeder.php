<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class exmMarkSeeder extends Seeder
{

    public function run()
    {
        DB::table('exma_mark')->insert(
            [
                'name'=>Str::random(5),
                'class'=>Str::random(5),
                'mark'=>Str::random(5)

            ]
                );
    }
}
