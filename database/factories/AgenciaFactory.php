<?php

use App\Models\Agencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgenciaFactory extends Factory
{
    protected $model = Agencia::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->company(),
            'nit' => $this->faker->unique()->numerify('##########'),
            'tipo' => $this->faker->randomElement(['principal', 'sucursal']),
        ];
    }
}
