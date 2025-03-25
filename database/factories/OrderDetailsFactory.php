<?php

namespace Database\Factories;

use App\Entities\OrderDetails\OrderDetailsEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Entities\OrderDetails\OrderDetailsEntity>
 */
class OrderDetailsFactory extends Factory
{
    /**
     * El nombre del modelo asociado al factory.
     *
     * @var string
     */
    protected $model = OrderDetailsEntity::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        ];
    }
}