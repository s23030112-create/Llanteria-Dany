<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    /** @use HasFactory<\Database\Factories\ProveedorFactory> */
    use HasFactory;

    protected $table = 'proveedores';
    protected $primaryKey = 'prov_id_proveedor';
    public $timestamps = false;

    protected $fillable = [
        'prov_nombre', 'prov_ap_paterno', 'prov_ap_mater', 'prov_correo_contacto',
        'prov_telefono', 'prov_telefono_agente', 'prov_calle', 'prov_numero_exterior',
        'prov_numero_interior', 'prov_colonia', 'prov_ciudad', 'prov_estado',
        'prov_dias_entrega', 'prov_credito'
    ];
}
