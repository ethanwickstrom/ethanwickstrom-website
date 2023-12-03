<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PhotoCollection;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoCollectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhotoCollection::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(15),
            'visibility' => 'private',
        ];
    }
}
