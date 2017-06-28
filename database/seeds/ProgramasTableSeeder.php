<?php

use Illuminate\Database\Seeder;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert(['nombre' => 'CTA','horario' => '8-1',]);
        DB::table('programas')->insert(['nombre' => 'Finanzas','horario' => '9-5',]);
        DB::table('programas')->insert(['nombre' => 'Biblioteca','horario' => '7-8',]);
        DB::table('programas')->insert(['nombre' => 'Coordinacion academica','horario' => '7-3',]);
        DB::table('programas')->insert(['nombre' => 'Proulex','horario' => '8-8',]);
    }
}
