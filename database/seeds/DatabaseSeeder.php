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
        $this->call(RegionTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(InstituteTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
