<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => $this->faker->word,
            'value' => $this->faker->word,
            'name' => $this->faker->word,
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(3)) . '</p>',
        ];
    }
}
