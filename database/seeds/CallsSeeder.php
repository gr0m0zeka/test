<?php

use Illuminate\Database\Seeder;

class CallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Call::class, 20)->create();
    }
}
