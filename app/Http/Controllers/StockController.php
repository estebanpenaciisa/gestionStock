<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Stock;
use App\Sucursal;


class StockController extends Controller
{
  
    public function index($id){
        $stock = Stock::where('sucursal_id', $id)->get();
        $productos = Producto::get();
        return view('stock',[
            'stock' => $stock,
            'productos' => $productos
        ]);

    }


    public function store(Request $request){
        $this->validate($request,[
            'sucursal' => 'required'
        ]);
   

        $stock = new Stock();
        $stock->producto_id = $request->id;
        $stock->sucursal_id = $request->sucursal;
        $stock->cantidad = $request->cantidad;
        $stock->save();

        $stock = Stock::get();

        
        $productos = Producto::get();
        return view('producto',[
            'productos' => $productos
        ]);
    }

    public function create($id){
        $productos = Producto::where('id', $id)->get();
        $sucursales = Sucursal::get();
        $stock = Stock::where('producto_id', $id)->get();

        return view('asignarStock',[
            'sucursales' => $sucursales,
            'productos' => $productos,
            'stock' => $stock
        ]);
    }

}