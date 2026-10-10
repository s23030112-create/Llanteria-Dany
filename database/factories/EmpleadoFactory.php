<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'emp_nombre' => substr($this->faker->firstName(), 0, 30),
            'emp_ap_paterno' => substr($this->faker->lastName(), 0, 15),
            'emp_ap_mater' => substr($this->faker->lastName(), 0, 15),
            'emp_correo' => substr($this->faker->unique()->safeEmail(), 0, 35),
            'emp_contrasena' => 'emp12345',
            'emp_telefono' => $this->faker->numerify(''),
            'emp_telefono_emergencia' => $this->faker->numerify(''),
            'emp_fecha_ingreso' => $this->faker->date('Y-m-d', '-1 year'),
        ];
    }
}
