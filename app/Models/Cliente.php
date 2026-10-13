<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'correo',
        'codigo',
        'telefono',
        'pedido_id'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
