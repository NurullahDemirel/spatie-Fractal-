<?php

namespace Database\Factories\Post;

use App\Models\Post\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,100),
            'country_id'=>rand(1,100),
            'body'=>$this->faker->sentence(7)
        ];
    }
}

