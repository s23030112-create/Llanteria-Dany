<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    /** @use HasFactory<\Database\Factories\DetalleVentaFactory> */
    use HasFactory;

    protected $table = 'detalle_ventas';
    protected $primaryKey = 'det_ven_id_detalle_vent';
    public $timestamps = false;

    protected $fillable = [
        'det_ven_id_venta', 'det_ven_id_producto', 'det_ven_precio',
        'det_ven_iva', 'det_ven_cantidad'
    ];
}
