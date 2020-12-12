<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=> $this->faker->company,
            'email'=> $this->faker->unique()->email,
            'logo' => 'assets/companies/logo-test-'.mt_rand(1,10).'.png',
            'website'=> $this->faker->domainName,
        ];
    }
}
