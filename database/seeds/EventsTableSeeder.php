<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Taller de Arduino',
            'startTime' => '2019-11-13',
            'endTime' => '2019-11-13',
            'timeZone' => 'Pe',
            'description' => 'Taller de introducción para el uso de Arduino',
            'header' => 'Taller',
            'footer' => 'Universidad Autónoma del Perú',
            'agenda' => 'Usar Arduino',
            'keywords' => 'Arduino',
            'inviteStudents' => 1,
            'remotelyAccessible' => 1,
            'status' => 1,
            'eventSubCategory_id' => null,
            'eventCategory_id' => null,
        ]);
    }
}
