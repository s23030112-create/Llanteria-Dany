<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    public function definition(): array
    {
        $subtotal = $this->faker->randomFloat(2, 1000, 8000);
        $iva = round($subtotal * 0.16, 2);

        return [
            'ven_fecha' => $this->faker->date(),
            'ven_hora' => $this->faker->time(),
            'ven_forma_pago' => $this->faker->randomElement(['Efectivo', 'Tarjeta de Crédito', 'Transferencia']),
            'ven_id_ciente' => 1,
            'ven_id_empleado' => 1,
            'ven_subtotal' => $subtotal,
            'ven_iva' => $iva,
            'ven_total' => $subtotal + $iva,
        ];
    }
}