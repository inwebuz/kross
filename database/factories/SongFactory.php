<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SongFactory extends Factory
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
            'name' => $this->faker->word,
            'artist' => $name,
            'album' => $this->faker->word,
            'cover' => 'songs/01.png',
            'file' => '01.mp3',
            'status' => 1,
        ];
    }
}
