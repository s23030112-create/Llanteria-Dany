<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cli_nombre' => substr($this->faker->firstName(), 0, 30),
            'cli_ap_paterno' => substr($this->faker->lastName(), 0, 15),
            'cli_ap_mater' => substr($this->faker->lastName(), 0, 15),
            'cli_correo' => substr($this->faker->unique()->safeEmail(), 0, 35),
            'cli_contrasena' => 'pass1234',
            'cli_telefono' => $this->faker->numerify(''),
            'cli_tipo_cliente' => $this->faker->randomElement(['A', 'B', 'C']),
            'cli_calle' => substr($this->faker->streetName(), 0, 20),
            'cli_numero_exterior' => $this->faker->numberBetween(10, 9999),
            'cli_numero_interior' => $this->faker->optional()->numberBetween(1, 100),
            'cli_colonia' => substr($this->faker->citySuffix(), 0, 20),
            'cli_ciudad' => substr($this->faker->city(), 0, 20),
            'cli_estado' => substr($this->faker->state(), 0, 20),
            'cli_datos_facturacion' => strtoupper($this->faker->bothify('RFC-')),
            
        ];
    }
}
