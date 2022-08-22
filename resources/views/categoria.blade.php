@extends('layouts.app')

@section('content')
    <h1 class="text-center">Categorias</h1>
    <br>
    <hr>
    <br>

<div class="container">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col" class="text-uppercase">Codigo Categoria</th>
        <th scope="col" class="text-uppercase">Nombre Categoria</th>
        <th scope="col" class="text-uppercase">Edicion</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categorias as $categoria)
        <tr>
          <th scope="row">{{ $categoria->id }}</th>
          <td>{{ $categoria->nombre }}</td>
          <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
            </div></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


@stop