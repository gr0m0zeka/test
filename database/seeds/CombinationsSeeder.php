<?php

use Illuminate\Database\Seeder;

class CombinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Combination::class, 10)->create();
    }
}
