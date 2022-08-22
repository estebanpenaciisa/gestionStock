<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function index(){
        
        $categorias = Categoria::get();
        return view('categoria',[
            'categorias' => $categorias
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'nombre' => 'required'
        ]);
      
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::get();
        return view('categoria',[
            'categorias' => $categorias
        ]);
        
    }

    public function create(){
        return view('registrarCategoria');
    }
    /*
    public function registrarCategoria(){
        return view('registrarCategoria');
    }

    public function guardarcategoria(){
        return view('categoria');      
    }
    */
}
