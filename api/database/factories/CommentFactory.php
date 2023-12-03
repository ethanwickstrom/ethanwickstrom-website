<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->text(),
            'user_id' => \App\Models\User::factory(),
            'commentable_type' => $this->faker->randomElement([
                \App\Models\Project::class,
                \App\Models\Article::class,
            ]),
            'commentable_id' => function (array $item) {
                return app($item['commentable_type'])->factory();
            },
        ];
    }
}
