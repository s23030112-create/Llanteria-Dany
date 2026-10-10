<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    /** @use HasFactory<\Database\Factories\VentaFactory> */
    use HasFactory;

    protected $table = 'ventas';
    protected $primaryKey = 'ven_id_venta';
    public $timestamps = false;

    protected $fillable = [
        'ven_fecha', 'ven_hora', 'ven_forma_pago', 'ven_id_ciente',
        'ven_id_empleado', 'ven_subtotal', 'ven_iva', 'ven_total'
    ];
}
