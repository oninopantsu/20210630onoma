<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->safeEmail,
            'buildingname' => $this->faker->secondaryAddress,
            'postcode' => $this->$faker->regexify(‘[1-9]{3}-[0-9]{4}‘)
            'address' => $this->faker->address,
            'opinion' => $this->faker->realText(120)

        ];
    }
}
