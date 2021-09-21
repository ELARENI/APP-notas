<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => 'coto',
        'apellido' => 'zelaya',
        'dui' => '0568787-4',
        'telefono' => '789652',
        'email'=> 'coto123@gmail.com',
        'password'=> ('coto')
    ];
});
