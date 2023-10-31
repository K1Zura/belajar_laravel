<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'name' => $faker -> name(),
            'gender'=> arr::random(['L','P']),
            'nis' => mt_rand(0000001, 9999999),
            'class_id'=> arr::random([1, 2, 3, 4]),
        ];
    }
}
