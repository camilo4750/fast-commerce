<?php

namespace Database\Factories;

use App\Entities\Client\ClientEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Entities\Client\ClientEntity>
 */
class ClientFactory extends Factory
{
    /**
     * El nombre del modelo asociado al factory.
     *
     * @var string
     */
    protected $model = ClientEntity::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(100, 1000),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
