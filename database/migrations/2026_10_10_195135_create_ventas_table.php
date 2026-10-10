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
    Schema::create('ventas', function (Blueprint $table) {
            $table->id('ven_id_venta');
            $table->date('ven_fecha');
            $table->time('ven_hora');
            $table->string('ven_forma_pago', 30);

            $table->foreignId('ven_id_ciente')->constrained('clientes', 'cli_id_cliente')->onDelete('cascade');
            $table->foreignId('ven_id_empleado')->constrained('empleados', 'emp_id_empleado')->onDelete('cascade');

            $table->double('ven_subtotal');
            $table->double('ven_iva');
            $table->double('ven_total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {    
        Schema::dropIfExists('ventas');
    }
};
