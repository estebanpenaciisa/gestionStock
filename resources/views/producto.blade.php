@extends('layouts.app')

@section('content')
    <h1 class="text-center">Productos</h1>
    <br>
    <hr>
    <br>

<div class="container">
<div class="row">
    @foreach($productos as $producto)
        <div class="col-3">
            <div class="card">
            @if(Storage::disk('imagenes')->has($producto->imagen))
                <img src="{{ url('miniatura/'.$producto->imagen) }}" alt="">
                @else
                <img src="{{ $producto->imagen }}" alt="">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <h7 class="card-title">{{ $producto->precio }}</h5>
                    <p class="card-text"> {{ $producto->descripcion }} </p>
                    <p class="card-text text-muted"> {{ \FormatTime::LongTimeFilterCreated($producto->created_at) }} </p>
                    <p class="card-text text-muted"> {{ \FormatTime::LongTimeFilter($producto->updated_at) }} </p>
                    <form action="/stock/asignarstock/{{ $producto->id }}">
                        <input class="btn btn-primary" type="submit" value="Asignar a Sucursal" />
                    </form>
                    <form action="/producto/{{ $producto->id }}/editar">
                        <input class="btn btn-primary" type="submit" value="Editar" />
                    </form>
                    <form action="{{ url('/producto', ['id' => $producto->id]) }}" method="post">
                        <input class="btn btn-primary" type="submit" value="Eliminar" />
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
@stop
