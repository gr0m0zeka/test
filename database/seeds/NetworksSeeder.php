<?php

use Illuminate\Database\Seeder;

class NetworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Network::class, 3)->create();
    }
}
