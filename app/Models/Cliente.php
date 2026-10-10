<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'cli_id_Cliente';
    public $timestamps = false;

    protected $fillable = [
        'cli_nombre', 'cli_ap_paterno', 'cli_ap_mater', 'cli_correo',
        'cli_contrasena', 'cli_telefono', 'cli_tipo_cliente', 'cli_calle',
        'cli_numero_exterior', 'cli_numero_interior', 'cli_colonia',
        'cli_ciudad', 'cli_estado', 'cli_datos_facturacion'
    ];
}
