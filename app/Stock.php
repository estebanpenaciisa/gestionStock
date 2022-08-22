<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';
    protected $primaryKey = 'id';

    public function sucursales(){
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }
    public function productos(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }
    
}
