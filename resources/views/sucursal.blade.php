@extends('layouts.app')

@section('content')
    <h1 class="text-center">Sucursales</h1>
    <br>
    <hr>
    <br>

<div class="container">
<div class="row">
    @foreach($sucursales as $sucursal)
        <div class="col-3">
            <div class="card">
            @if(Storage::disk('imagenes')->has($sucursal->imagen))
                <img src="{{ url('miniatura/'.$sucursal->imagen) }}" alt="">
                @else
                <img src="{{ $sucursal->imagen }}" alt="">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $sucursal->nombre }}</h5>
                    <p class="card-text"> {{ $sucursal->direccion }} </p>
                    <a href="/stock/{{ $sucursal->id }}" class="card-link">Listado de Productos</a>
                    <br>
                    <a href="#" class="card-link">Editar</a>
                    <a href="#" class="card-link">Eliminar</a>
                </div>
            </div>
        </div>
        @endforeach
</div>
</div>
@stop
