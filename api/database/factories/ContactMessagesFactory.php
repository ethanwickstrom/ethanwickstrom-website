<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ContactMessages;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactMessagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactMessages::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'message' => $this->faker->sentence(20),
            'status' => 'pending',
            'user_id' => \App\Models\User::factory(),
            'handled_by' => \App\Models\User::factory(),
        ];
    }
}
