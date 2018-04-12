<?php

use App\Turn;
use Illuminate\Database\Seeder;

class TurnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Turn::class, 200)->create();
    }
}
