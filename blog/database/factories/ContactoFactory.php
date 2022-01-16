<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'numero' => $this->faker->phoneNumber,
        ];
    }
}
