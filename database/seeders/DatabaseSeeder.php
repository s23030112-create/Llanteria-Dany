<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Crear Clientes, Empleados y Proveedores
        Cliente::factory(10)->create();
        Empleado::factory(5)->create();
        Proveedor::factory(5)->create();

        // Extraer los IDs reales directamente de la base de datos MySQL
        $clienteIds = Cliente::pluck('cli_id_cliente');
        $empleadoIds = Empleado::pluck('emp_id_empleado');
        $proveedorIds = Proveedor::pluck('prov_id_proveedor');

        // 2. Crear 15 Productos
        foreach (range(1, 15) as $i) {
            Producto::factory()->create([
                'prod_id_proveedor' => $proveedorIds->random(),
            ]);
        }
        $productoIds = Producto::pluck('prod_id_producto');

        // 3. Crear 10 Ventas
        foreach (range(1, 10) as $i) {
            Venta::factory()->create([
                'ven_id_ciente' => $clienteIds->random(),
                'ven_id_empleado' => $empleadoIds->random(),
            ]);
        }
        $ventaIds = Venta::pluck('ven_id_venta');

        // 4. Crear 20 Detalles de Venta
        foreach (range(1, 20) as $i) {
            DetalleVenta::factory()->create([
                'det_ven_id_venta' => $ventaIds->random(),
                'det_ven_id_producto' => $productoIds->random(),
            ]);
        }
    }
}