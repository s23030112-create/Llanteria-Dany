<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'prod_id_producto';
    public $timestamps = false;

    protected $fillable = [
        'prod_marca', 'prod_subtipo', 'prod_medida', 'prod_precio_sin_iva',
        'prod_iva', 'prod_precio_publico', 'prod_stock', 'prod_descuento_1',
        'prod_descuento_2', 'prod_descuento_3', 'prod_id_proveedor'
    ];
}
