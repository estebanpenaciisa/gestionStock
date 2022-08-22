@extends('layouts.app')

@section('content')
<h1 class="text-center">Agregar Sucursal</h1>
    <br>
    <hr>
    <br>

<div class="container">
    <div>
        <h3>Ingresar Datos de Sucursal</h3>
        <br>
    </div>
    <form class="row g-3" method="POST" action="{{ url('/sucursal') }} " enctype="multipart/form-data">
        <div class="col-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input
            type="text"
            class="form-control"
            id="nombre"
            name="nombre"
            placeholder="Nombre de la sucursal"
            required
            />
        </div>
        <div class="col-md-6">
            <label for="region" class="form-label">Region</label>
            <input type="text" class="form-control" id="region" name="region" placeholder="ej: Region Metropolitana" required/>
        </div>
        <div class="col-md-6">
            <label for="comuna" class="form-label">Comuna</label>
            <input type="text" class="form-control" id="comuna" name="comuna" placeholder="ej: Las condes" required />
        </div>
        <div class="col-12">
            <label for="direccion" class="form-label">Direccion</label>
            <input
            type="text"
            class="form-control"
            id="direccion" 
            name="direccion" 
            placeholder="ej: Av. las condes"
            required
            />
        </div>
        <div class="col-12">
        <label for="imagen" class="form-label">Imagen</label>
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