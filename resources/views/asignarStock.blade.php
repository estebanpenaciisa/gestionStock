@extends('layouts.app')

@section('content')

<h1 class="text-center">Asignar Producto a Sucursal</h1>
    <br>
    <hr>
    <br>    
            <div class="container">
            <div>
                <h3>Seleccione una sucursal</h3>
                <br>
            </div>
                <div class="row">
                    <div class="col">
                            <form class="row g-4" method="POST" action="{{ url('/stock')}}">
                                <div class="col-md-12">
                                <label for="id" class="form-label">Producto</label>
                                <select class="form-select" aria-label="Default select example" name="id">
                                    @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                    @endforeach
                                </select> 
                                </div>
                                <div class="col-md-12">
                                <label for="sucursal" class="form-label">Sucursal</label>
                                <select class="form-select" aria-label="Default select example" name="sucursal">

                                    @foreach($sucursales as $sucursal)
                                    <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                                    @endforeach

                                </select> 
                                </div>
                                <div class="col-md-6">
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" id="cantidad" name="cantidad" required/>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>                            

                           
                            </form>
                            
                        
                        
                    </div>
                </div>
            </div>

@stop