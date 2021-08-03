<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $nombre = $this->faker->unique()->sentence();
        return [
            //
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'extracto' => $this->faker->text(250),
            'body' => $this->faker->text(2000),
            'estado' => $this->faker->randomElement([1, 2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ];
    }
}