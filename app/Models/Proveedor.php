<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'correo',
        'codigo',
        'telefono',
        'producto_id'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
