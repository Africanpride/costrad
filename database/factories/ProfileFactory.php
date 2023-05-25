<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'dateOfBirth' => $this->faker->date(),
            'address' => $this->faker->address(),
            'city' => $this->faker->optional()->city(),
            'state' => $this->faker->optional()->state(),
            'zipcode' => $this->faker->optional()->postcode(),
            'country' => $this->faker->optional()->country(),
            'telephone' => $this->faker->phoneNumber(),
            'emergencyContactName' => $this->faker->name(),
            'emergencyContactTelephone' => $this->faker->phoneNumber(),
            'nationality' => $this->faker->randomElement(['Nigeria', 'Ghana', 'South Africa', 'United States', 'United Kingdom']),
            'active' => $this->faker->boolean(false),
            'bio' => 'We want to know more about you - update your bio once and showcase your unique story.',
            'resume' => $this->faker->url(),
            'disabled' => $this->faker->boolean(false),
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced', 'widowed']),
            'avatar' => $this->faker->imageUrl(640, 480),
        ];
    }
}
