<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

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
            'DOB' => $this->faker->date(),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'address_1' => $this->faker->address(),
            'address_2' => $this->faker->optional()->secondaryAddress(),
            'telephone' => $this->faker->phoneNumber(),
            'emergencyContactName' => $this->faker->name(),
            'emergencyContactTelephone' => $this->faker->phoneNumber(),
            'nationality' => $this->faker->randomElement(['Nigeria', 'Ghana', 'South Africa', 'United States', 'United Kingdom']),
            'insurance_id' => $this->faker->randomNumber(8),
            'insured' => $this->faker->boolean(),
            'active' => $this->faker->boolean(),
            'avatar' => $this->faker->imageUrl(640, 480),
        ];
    }

}
