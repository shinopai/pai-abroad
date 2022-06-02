<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dest;

class DestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dest::factory()->count(150)->create();
    }
}
