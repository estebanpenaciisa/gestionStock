
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre'=> 'Computadores',
            ],
            [
                'nombre'=> 'Accesorios',
            ]
        ));
    }
}