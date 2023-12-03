<?php

namespace Database\Factories;

use App\Models\Like;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Like::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'likeable_type' => $this->faker->randomElement([
                \App\Models\Project::class,
                \App\Models\Article::class,
            ]),
            'likeable_id' => function (array $item) {
                return app($item['likeable_type'])->factory();
            },
        ];
    }
}
