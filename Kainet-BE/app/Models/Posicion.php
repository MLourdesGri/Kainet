<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    use HasFactory;

    protected $table = 'posiciones';
    protected $fillable = ['idEmpresa', 'idProducto', 'fechaEntregaInicio', 'moneda', 'precio'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idProducto');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'idEmpresa');
    }
}
