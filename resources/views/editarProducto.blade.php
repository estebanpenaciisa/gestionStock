@extends('layouts.app')

@section('content')

<h1 class="text-center">Editar Producto</h1>
    <br>
    <hr>
    <br>

<div class="container">
    <div>
        <h3>Ingresar Datos del producto</h3>
        <br>
    </div>
    <form class="row g-3" method="POST" action="/producto/{{ $id }}" enctype="multipart/form-data">      
      @method('patch')
      @csrf
      <div class="col-12">
      <label for="nombreprod" class="form-label">Nombre</label>
      <input type="text"
        class="form-control"
        id="nombreprod"
        name="nombre"
        placeholder="Ingrese nombre del producto" 
        required/>  
      </div>
      <div class="col-md-6">
        <label for="codprod" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="codprod" name="codigo" placeholder="ej: xx111" required/>
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-6">
      <label for="categoriaprod" class="form-label">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="categoria">
            <option selected>Seleccione Categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select> 
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-6">
      <label for="precioprod" class="form-label">Precio</label>
      <input type="text" class="form-control" id="precioprod" name="precio" placeholder="Ingrese precio del producto" required>    
      </div>
      <div class="col-md-6"></div>
      <div class="col-12">
        <label for="descripcionprod" class="form-label">Descripcion</label>
        <textarea
        type="text" 
        class="form-control" 
        id="descripcion" 
        name="descripcion" 
        placeholder="Ingrese descripcion del producto" 
        required
        >
        </textarea>
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Imagen</label>
        <input
            type="file"
            class="form-control"
            id="imagen" 
            name="imagen"
            accept=".jpg, .png, .jpeg"
            required
            />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>

    </form>
</div>

@stop