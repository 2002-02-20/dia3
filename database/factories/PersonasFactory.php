<?php

namespace Database\Factories;

use App\Models\Personas;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personas>
 */
class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> fake()->name(),
            'apellido'=>fake()->lastName(),
            'telefono'=> fake()->phoneNumber(),
            
        ];
    }
}
