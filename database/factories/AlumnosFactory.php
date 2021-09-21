<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'Elsi',
        'apellido' => 'Debu',
        'fecha_nacimiento' => '20/12/2014',
        'direccion' => 'san tecla',
        'genero' => 'f',
        'telefono' => '7856963',
        'email' => 'e@gmail.com',
        'password' =>('22222')
    ];
});
