<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadoFactory> */
    use HasFactory;
    protected $table = 'empleados';
    protected $primaryKey = 'emp_id_empleado';
    public $timestamps = false;

    protected $fillable = [
        'emp_nombre', 'emp_ap_paterno', 'emp_ap_mater', 'emp_correo',
        'emp_contrasena', 'emp_telefono', 'emp_telefono_emergencia', 'emp_fecha_ingreso'
    ];
}
