<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $address = Address::inRandomOrder()->first();
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone_number' => $this->faker->phoneNumber,
            'receiver_name' => $this->faker->name,
            'receiver_email' => $this->faker->email,
            'receiver_phone_number' => $this->faker->phoneNumber,
            'address_id' =>  Address::inRandomOrder()->first()->id,
            'receiver_address_id' =>  Address::inRandomOrder()->first()->id,

        ];
    }
}
