<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'cliente_id',
        'empleado_id'
    ];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleados()
    {
        return $this->belongsTo(Empleado::class);
    }
}
