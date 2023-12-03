<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(15),
            'image_path' => $this->faker->text(255),
            'thumbnail_path' => $this->faker->text(255),
            'alt_text' => $this->faker->text(255),
            'is_featured' => $this->faker->boolean(),
            'visibility' => 'private',
            'order' => $this->faker->unique->randomNumber(0),
            'taken_at' => $this->faker->dateTime('now', 'UTC'),
            'camera_make' => $this->faker->text(255),
            'camera_model' => $this->faker->text(255),
            'focal_length' => $this->faker->text(255),
            'exposure_time' => $this->faker->text(255),
            'aperture' => $this->faker->text(255),
            'iso' => $this->faker->randomNumber(0),
            'gps_latitude' => $this->faker->randomNumber(1),
            'gps_longitude' => $this->faker->randomNumber(1),
        ];
    }
}
