<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prov_nombre' => substr($this->faker->company(), 0, 30),
            'prov_ap_paterno' => substr($this->faker->lastName(), 0, 15),
            'prov_ap_mater' => substr($this->faker->lastName(), 0, 15),
            'prov_correo_contacto' => substr($this->faker->companyEmail(), 0, 35),
            'prov_telefono' => $this->faker->numerify(''),
            'prov_telefono_agente' => $this->faker->numerify(''),
            'prov_calle' => substr($this->faker->streetName(), 0, 20),
            'prov_numero_exterior' => $this->faker->numberBetween(10, 9999),
            'prov_numero_interior' => $this->faker->optional()->numberBetween(1, 50),
            'prov_colonia' => substr($this->faker->citySuffix(), 0, 20),
            'prov_ciudad' => substr($this->faker->city(), 0, 20),
            'prov_estado' => substr($this->faker->state(), 0, 20),
            'prov_dias_entrega' => $this->faker->randomElement(['Lunes a Viernes', 'Martes y Jueves', '24 a 48 horas']),
            'prov_credito' => $this->faker->randomFloat(2, 5000, 50000),
        ];
    }
}
