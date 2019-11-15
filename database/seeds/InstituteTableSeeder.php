<?php

use App\Models\Institute;
use Illuminate\Database\Seeder;

class InstituteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institute::create([
            'name' => 'Universidad Autónoma del Perú',
            'section_id' => 1,
        ]);
    }
}
