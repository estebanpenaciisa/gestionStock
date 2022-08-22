@extends('layouts.app')

@section('content')

<h1 class="text-center">Agregar Producto</h1>
    <br>
    <hr>
    <br>



                
            <div class="container">
            <div>
                <h3>Ingresar Datos de la categoria</h3>
                <br>
            </div>
                <div class="row">
                    <div class="col">
                            <form class="row g-4" method="POST" action="{{ url('/categoria')}}">
                                <div class="col-md-12">
                                    <label for="nombrecategoria" class="form-label">Nombre Categoria</label>
                                    <input type="text" class="form-control" id="nombrecategoria" name="nombre" placeholder="ingresar nombre de categoria" required>    
                                </div>
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>                            

                           
                            </form>
                            
                        
                        
                    </div>
                </div>
            </div>

@stop