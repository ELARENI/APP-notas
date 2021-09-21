<?php

use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumnos::class,18)->create();
      /* Alumnos::create(
            [
            'id_alumno'=> '1',
            'name'=> 'Karla',
            'apellido'=> 'Quesada',
            'fecha_nacimiento'=> '20/01/2011',
            'direccion'=> 'planes',
            'genero'=> 'f',
            'apellido'=> 'Arenivar',
            'telefono'=> '7853962',
            'email'=> 'k@gmail.com',
            'password'=> bcrypt('12345')
            
             ]
        );*/
    }
}
