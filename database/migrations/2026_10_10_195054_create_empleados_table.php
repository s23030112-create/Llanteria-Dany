<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('empleados', function (Blueprint $table) {
            $table->id('emp_id_empleado');
            $table->string('emp_nombre', 30);
            $table->string('emp_ap_paterno', 15);
            $table->string('emp_ap_mater', 15);
            $table->string('emp_correo', 35);
            $table->string('emp_contrasena', 20);
            $table->string('emp_telefono', 15);
            $table->string('emp_telefono_emergencia', 15);
            $table->date('emp_fecha_ingreso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('empleados');
    }
};