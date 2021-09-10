<?php

namespace Database\Factories\Comment;

use App\Models\Comment\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body'=>$this->faker->sentence(),
            'user_id'=>rand(1,100),
            'country_id'=>rand(1,100),
            'post_id'=>rand(1,100),
        ];
    }
}
