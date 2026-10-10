<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $precioSinIva = $this->faker->randomFloat(2, 800, 3000);
        $iva = round($precioSinIva * 0.16, 2);
        $precioPublico = $precioSinIva + $iva;
        return [
            'prod_marca' => $this->faker->randomElement(['Michelin', 'Bridgestone', 'Goodyear', 'Pirelli', 'Continental']),
            'prod_subtipo' => $this->faker->randomElement(['Radial', 'Convencional', 'Deportiva']),
            'prod_medida' => $this->faker->randomElement(['205/55 R16', '185/65 R15', '215/60 R17', '225/45 R18']),
            'prod_precio_sin_iva' => $precioSinIva,
            'prod_iva' => $iva,
            'prod_precio_publico' => $precioPublico,
            'prod_stock' => $this->faker->numberBetween(10, 100),
            'prod_descuento_1' => $this->faker->randomElement([0, 5, 10]),
            'prod_descuento_2' => $this->faker->randomElement([0, 2]),
            'prod_descuento_3' => 0,
            'prod_id_proveedor' => Proveedor::factory(),
        ];
    }
}
