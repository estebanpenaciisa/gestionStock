<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'nombre'=> 'Sucursal Santiago Centro',
                'region'=> 'Metropolitana',
                'comuna'=> 'Santiago',
                'direccion'=> 'libertador bernardo ohiggins 654',
                'imagen'=> 'https://techpinions.com/wp-content/uploads/2012/06/Retail_Experience_Center_2_web.jpg'
            ],
            [
                'nombre'=> 'Sucursal Concepcion',
                'region'=> 'Bio Bio',
                'comuna'=> 'Concepcion',
                'direccion'=> 'Av Los Carrera 684',
                'imagen'=> 'https://media.segd.org/s3fs-public/styles/galleryformatter_slide/public/Office_Depot_Techdepot.jpg'
            ],
            [
                'nombre'=> 'Sucursal Pto Montt',
                'region'=> 'Los Lagos',
                'comuna'=> 'Puerto Montt',
                'direccion'=> 'Sta Maria 643',
                'imagen'=> 'https://im.indiatimes.in/media/content/2013/Jun/ms_1371205962_540x540.jpg'
            ]
        ));
    }
}