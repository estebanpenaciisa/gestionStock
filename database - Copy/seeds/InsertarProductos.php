<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(  
            [
                'codigo'=> 'xx000',
                'nombre'=> 'laptop lenovo',
                'categoria_id'=> '1',
                'descripcion'=> 'computador portatil marca lenovo',
                'status'=> '1',
                'precio'=> 600000,
                'imagen'=> 'https://m.media-amazon.com/images/I/51mSFH3B8aL._AC_SL1000_.jpg',
            ],
            [
                'codigo'=> 'xx001',
                'nombre'=> 'mouse',
                'categoria_id'=> '2',
                'descripcion'=> 'mouse generico',
                'status'=> '1',
                'imagen'=> 'https://tolivmarket-production.s3.sa-east-1.amazonaws.com/products/05a13a1d510deddfb6a7bd12d9d8c4eda7928f1859ae747a1bb8046caad9394f.jpg',
                'precio'=> 6000,
              
            ],
            [
                'codigo'=> 'xx002',
                'nombre'=> 'teclado',
                'categoria_id'=> '2',
                'descripcion'=> 'teclado generico',
                'status'=> '1',
                'imagen'=> 'https://www.nicepng.com/png/detail/828-8281821_generic-grey-impact-700-gaming-keyboard-mechanical-keyboard.png',
                'precio'=> 60000,
            ],           

        ));
    }
}