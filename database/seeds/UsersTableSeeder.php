<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert(['nombre' => 'Juan','correo' => 'JM14@gmail.com', 'password' => bcrypt('12'), 'codigo' => 1234,'rol' => 'Prestador','carrera_id' => '1',]);
         DB::table('users')->insert(['nombre' => 'Jose','correo' => 'jose@gmail.com', 'password' => bcrypt('123'), 'codigo' => 12345,'rol' => 'Prestador','carrera_id' => '1',]);
         DB::table('users')->insert(['nombre' => 'Gerardo','correo' => 'gerardo@gmail.com', 'password' => bcrypt('1234'), 'codigo' => 12346,'rol' => 'Prestador','carrera_id' => '2',]);
         DB::table('users')->insert(['nombre' => 'Roberto','correo' => 'roberto@gmail.com', 'password' => bcrypt('12345'), 'codigo' => 12347,'rol' => 'Prestador','carrera_id' => '3',]);
         DB::table('users')->insert(['nombre' => 'Pedro','correo' => 'pedro@gmail.com', 'password' => bcrypt('123456'), 'codigo' => 12348,'rol' => 'Prestador','carrera_id' => '4',]);
         DB::table('users')->insert(['nombre' => 'Angelica','correo' => 'angelica@gmail.com', 'password' => bcrypt('1234567'), 'codigo' => 12349,'rol' => 'Prestador','carrera_id' => '2',]);
         DB::table('users')->insert(['nombre' => 'Fabiola','correo' => 'fabiola@gmail.com', 'password' => bcrypt('12345678'), 'codigo' => 123410,'rol' => 'Prestador','carrera_id' => '3',]);
         DB::table('users')->insert(['nombre' => 'Erika','correo' => 'erika@gmail.com', 'password' => bcrypt('123456789'), 'codigo' => 123411,'rol' => 'Prestador','carrera_id' => '1',]);
         DB::table('users')->insert(['nombre' => 'Ramon','correo' => 'ramon@gmail.com', 'password' => bcrypt('12345678910'), 'codigo' => 123412,'rol' => 'Prestador','carrera_id' => '4',]);
         DB::table('users')->insert(['nombre' => 'Jessica','correo' => 'jessica@gmail.com', 'password' => bcrypt('1234567891011'), 'codigo' => 123413,'rol' => 'Prestador','carrera_id' => '2',]);
         DB::table('users')->insert(['nombre' => 'Fernando','correo' => 'fernando@gmail.com', 'password' => bcrypt('123456789101112'), 'codigo' => 123414,'rol' => 'Prestador','carrera_id' => '3',]);
         DB::table('users')->insert(['nombre' => 'Fernanda','correo' => 'fernanda@gmail.com', 'password' => bcrypt('12345678910111213'), 'codigo' => 123415,'rol' => 'Prestador','carrera_id' => '3',]);
         DB::table('users')->insert(['nombre' => 'Maria','correo' => 'maria@gmail.com', 'password' => bcrypt('admin1'), 'codigo' => 9876,'rol' => 'Admin','carrera_id' => '1',]);
         DB::table('users')->insert(['nombre' => 'Ricardo','correo' => 'ricardo@gmail.com', 'password' => bcrypt('admin2'), 'codigo' => 98765,'rol' => 'Admin','carrera_id' => '2',]);
         DB::table('users')->insert(['nombre' => 'Alejandro','correo' => 'alejandro@gmail.com', 'password' => bcrypt('admin3'), 'codigo' => 987654,'rol' => 'Admin','carrera_id' => '2',]);
    }
}
