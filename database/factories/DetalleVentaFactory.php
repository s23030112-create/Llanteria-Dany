<?php

namespace Database\Factories;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DetalleVenta>
 */
class DetalleVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cantidad = $this->faker->numberBetween(1, 4);
        $precio = $this->faker->randomFloat(2, 800, 2500);
        $iva = round($precio * 0.16, 2);
        return [
            'det_ven_id_venta' => Venta::factory(),
            'det_ven_id_producto' => Producto::factory(),
            'det_ven_precio' => $precio,
            'det_ven_iva' => $iva,
            'det_ven_cantidad' => $cantidad,
        ];
    }
}
