<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'             => $this->faker->sentence(mt_rand(2,8)),
            'slug'              => $this->faker->slug(),
            'excerpt'           => $this->faker->paragraph(mt_rand(10,25)),
            // 'body'              => $this->faker->paragraphs(mt_rand(5,10)),
            'body'              => collect($this->faker->paragraphs(mt_rand(5,10)))
                                    ->map(fn($p) => "<p>$p</p>")
                                    ->implode(''), // fn sama dengan 'function' tetapi tidak perlu kurung dan ;
            'user_id'           => mt_rand(1,3),
            'category_id'       => mt_rand(1,3)
        ];
    }
}
