<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class multiseeder extends Seeder
{

    public function run()
    {

        $this->call([
            StudentSeeder::class,
            exmMarkSeeder::class,
        ]);

    }
}
