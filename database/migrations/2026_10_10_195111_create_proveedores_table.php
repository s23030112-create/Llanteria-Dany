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
      Schema::create('proveedores', function (Blueprint $table) {
            $table->id('prov_id_proveedor');
            $table->string('prov_nombre', 30);
            $table->string('prov_ap_paterno', 15);
            $table->string('prov_ap_mater', 15);
            $table->string('prov_correo_contacto', 35);
            $table->string('prov_telefono', 15);
            $table->string('prov_telefono_agente', 15);
            $table->string('prov_calle', 20);
            $table->integer('prov_numero_exterior');
            $table->integer('prov_numero_interior')->nullable();
            $table->string('prov_colonia', 20);
            $table->string('prov_ciudad', 20);
            $table->string('prov_estado', 20);
            $table->string('prov_dias_entrega', 50);
            $table->double('prov_credito');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};