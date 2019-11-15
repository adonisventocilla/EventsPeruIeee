<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->name(),
        'startTime' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'endTime' ,
        'timeZone',
        'description',
        'header',
        'footer',
        'agenda',
        'keywords',
        'inviteStudents',
        'remotelyAccessible',
        'status',
        'eventSubCategory_id',
        'eventCategory_id',
    ];
});
