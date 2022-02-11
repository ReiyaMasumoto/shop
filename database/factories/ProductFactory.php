<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{

    protected $model = Product::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name,
            'price' => $this->faker->randomDigit,
            'stock' => $this->faker->randomDigit,
            'manufacturer' => $this->faker->company,
            'comment' => $this->faker->realText,
            'picture' => $this->faker->imageUrl
        ];
    }
}
