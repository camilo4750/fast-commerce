<?php

namespace Database\Factories;

use App\Entities\ClientProduct\ClientProductEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Entities\ClientProduct\ClientProductEntity>
 */
class ClientProductFactory extends Factory
{
    /**
     * El nombre del modelo asociado al factory.
     *
     * @var string
     */
    protected $model = ClientProductEntity::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(100, 1000),
            'client_id' => $this->faker->numberBetween(1, 5),
            'product_id' => $this->faker->numberBetween(1, 17),
        ];
    }
}
