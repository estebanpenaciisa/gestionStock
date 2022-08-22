<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();
        return view('sucursal',[
            'sucursales' => $sucursales
        ]);
    }

        public function store(Request $request){
            $this->validate($request,[
                'nombre' => 'required',
                'region' => 'required',
                'comuna' => 'required',
                'direccion' => 'required',
                'imagen' => 'required'
            ]);

    //    dd($request);
        $imagen = $request->file('imagen');

        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }

        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->region = $request->region;
        $sucursal->imagen = $imagen_path;
        $sucursal->comuna = $request->comuna;
        $sucursal->direccion = $request->direccion;

        $sucursal->save();

        $sucursales = Sucursal::get();
        return view('sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function create(){
        return view('registrarSucursal');
    }

    public function getImagen($filename){
        $file = \Storage::disk('imagenes')->get($filename);
        return new Response($file, 200);
    }
}
