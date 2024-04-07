<?php

namespace Database\Factories;

use App\Models\Empresas;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'business_name' => $this->faker->company,
            'nit' => $this->faker->randomNumber(7),
            'verification_digit' => $this->faker->numberBetween(0, 9),
            'corporate_email' => $this->faker->companyEmail,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'number_employees' => $this->faker->numberBetween(1, 100),
            'registration_Date' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'exporter' => $this->faker->boolean(50) ? 'Yes' : 'No',
        ];
    }
}
