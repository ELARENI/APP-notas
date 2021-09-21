<?php

use App\Profesor;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,18)->create();
        /*DB::table('profesor')->insert([
            'id_profesor'=> '1',
            'name'=> 'Luis',
            'apellido'=> 'Miguel',
            'dui'=> '0007-1532',
            'telefono'=> '79895665',
            'email'=> 'lm@gmail.com',
            'password'=> bcrypt('1234')
        ]);*/
    }
}
