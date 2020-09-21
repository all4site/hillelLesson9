<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Product::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
				'name' => $this->faker->name,
				'description' => $this->faker->unique()->text(100),
				'price' => $this->faker->randomFloat(2, 50, 500),
				'brand_id' => function () {
				    return Brand::inRandomOrder()->get()->first()->id;
				}
		];
	}
}
