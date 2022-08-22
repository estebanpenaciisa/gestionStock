@extends('layouts.app')

@section('content')
    <h1 class="text-center">Stock</h1>
    <br>
    <hr>
    <br>

<div class="container">
<div class="row">

    @foreach($stock as $stock)
        @foreach($productos as $producto)
            @if ($producto->id == $stock->producto_id)
            <div class="col-3">
                <div class="card">
                    <img src="{{ $producto->imagen}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <h7 class="card-title">{{ $producto->precio }}</h5>
                        <p class="card-text"> {{ $producto->descripcion }} </p>
                        <a href="#" class="card-link">Listado de Productos</a>
                        <br>
                        <a href="#" class="card-link">Editar</a>
                        <a href="#" class="card-link">Eliminar</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    @endforeach

</div>
</div>
@stop
