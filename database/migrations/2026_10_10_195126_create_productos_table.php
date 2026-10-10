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
         Schema::create('productos', function (Blueprint $table) {
            $table->id('prod_id_producto');
            $table->string('prod_marca', 15);
            $table->string('prod_subtipo', 15);
            $table->string('prod_medida', 40);
            $table->double('prod_precio_sin_iva');
            $table->double('prod_iva');
            $table->double('prod_precio_publico');
            $table->integer('prod_stock');
            $table->double('prod_descuento_1')->default(0);
            $table->double('prod_descuento_2')->default(0);
            $table->double('prod_descuento_3')->default(0);

            $table->foreignId('prod_id_proveedor')->constrained('proveedores', 'prov_id_proveedor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
