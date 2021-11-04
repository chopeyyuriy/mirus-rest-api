<?php

namespace Database\Factories;

use App\Models\Shipping;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'shipping_label' => $this->faker->unique()->name(),
            'zone' => $this->faker->title(),                        
            'status' => $this->faker->text(),
            'price' => $this->faker->randomNumber(3),            
            'tax' => $this->faker->randomNumber(2),            
        ];
    }
}
