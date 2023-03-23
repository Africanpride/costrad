<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newsroom>
 */
class NewsroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $title = $this->faker->sentence(5);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'overview' => $this->faker->text(),
            'body' => $this->faker->text(),
            'user_id' => User::all()->random()->id,
            'active' =>$this->faker->boolean(true),
            'featured_image' => $this->faker->imageUrl(300, 300),
            'user_id' => User::all()->unique()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),

            //
        ];
    }
}
