<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Producto;
use App\Sucursal;
use App\Stock;
use App\Categoria;

class ProductosController extends Controller
{
  
    public function index(){
        
        $productos = Producto::get();
        return view('producto',[
            'productos' => $productos
        ]);

    }
    
    public function store(Request $request){
        $this->validate($request,[
            'codigo' => 'required',
            'nombre' => 'required',
            'categoria' => 'required',
            'imagen' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);
        // dd($request);

        $imagen = $request->file('imagen');

        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }
        

        $producto = new Producto();
        $producto->codigo = $request->codigo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria;
        $producto->imagen = $imagen_path;
        $producto->status = 1;
        $producto->save();

        $productos = Producto::get();
        return view('producto',[
            'productos' => $productos
        ]);
    }
    
    public function create(){

        $categorias = Categoria::get();
        $sucursales = Sucursal::get();

        return view('registrarProducto',[
            'categorias' => $categorias,
            'sucursales' => $sucursales
        ]);
    }
    

    public function getImagen($filename){
        $file = \Storage::disk('imagenes')->get($filename);
        return new Response($file, 200);
    }


    public function search($search=null){
        if(is_null($search)){
            $search = \Request::get('search');
        }

        $productos = Producto::where('nombre', 'LIKE', '%'.$search.'%')->get();
        return view('producto')
        ->with(
            array(
                'productos' => $productos,
                'search' => $search
            )
        );      
    }

    public function destroy($id) 
       {
          Producto::where('id', $id)->delete();
          $productos = Producto::get();
          return view('producto',[
            'productos' => $productos
        ]);
       }

       public function update(Request $request, $id)
       {
           $imagen = $request->file('imagen');
           if($imagen){
               $imagen_path = time()."-".$imagen->getClientOriginalName();
               \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
           }
           
           $producto = Producto::Find($id);
           $producto->codigo = $request->codigo;
           $producto->nombre = $request->nombre;
           $producto->descripcion = $request->descripcion;
           $producto->precio = $request->precio;
           $producto->categoria_id = $request->categoria;
           $producto->imagen = $imagen_path;
           $producto->status = 1;
           $product->save();
       
           $productos = Producto::get();
           return view('producto',[
               'productos' => $productos
           ]);
       }

       public function editar($id){
        $idproducto = $id;
        $categorias = Categoria::get();
        $sucursales = Sucursal::get();

        return view('editarProducto',[
            'categorias' => $categorias,
            'sucursales' => $sucursales,
            'id' => $idproducto
        ]);
    }
}
