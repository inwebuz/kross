<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => mt_rand(20, 100) * 100000,
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(3)) . '</p>',
        ];
    }
}
