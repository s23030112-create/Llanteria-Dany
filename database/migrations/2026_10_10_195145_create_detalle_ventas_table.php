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
        Schema::create('detalle_ventas', function (Blueprint $table) {
          $table->id('det_ven_id_detalle_vent');

            $table->foreignId('det_ven_id_venta')->constrained('ventas', 'ven_id_venta')->onDelete('cascade');
            $table->foreignId('det_ven_id_producto')->constrained('productos', 'prod_id_producto')->onDelete('cascade');

            $table->double('det_ven_precio');
            $table->double('det_ven_iva');
            $table->integer('det_ven_cantidad');
        });
    }

    public function down(): void
    {
    /**
     * Reverse the migrations.
     */
         Schema::dropIfExists('detalle_ventas');
    }
};
