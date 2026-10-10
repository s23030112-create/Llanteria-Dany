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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cli_id_cliente');
            $table->string('cli_nombre', 30);
            $table->string('cli_ap_paterno', 15);
            $table->string('cli_ap_mater', 15);
            $table->string('cli_correo', 35);
            $table->string('cli_contrasena', 20);
            $table->string('cli_telefono', 15);
            $table->char('cli_tipo_cliente', 1);
            $table->string('cli_calle', 20);
            $table->integer('cli_numero_exterior');
            $table->integer('cli_numero_interior')->nullable();
            $table->string('cli_colonia', 20);
            $table->string('cli_ciudad', 20);
            $table->string('cli_estado', 20);
            $table->string('cli_datos_facturacion', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    
        Schema::dropIfExists('clientes');
    }
};