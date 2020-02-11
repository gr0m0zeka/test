<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UserSeeder::class);
//         $this->call(MessagesSeeder::class);
        $this->call(NetworksSeeder::class);
        $this->call(CombinationsSeeder::class);
        $this->call(CallsSeeder::class);
    }
}
