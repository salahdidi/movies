<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\movie>
 */
class MovieFactory extends Factory
{

    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        //$this->faker->image('storage/app/public',640,480, null, false)
        return [
            'title' => $this->faker->title(),
            'name' => $this->faker->title(),
            'descreption' => $this->faker->randomNumber(5),
            'trailer_path' => $this->faker->imageUrl,
            'image_path' => $this->faker->imageUrl,
            'release_date' => $this->faker->date(),
            'rating' => $this->faker->randomNumber(1),
            'nbr_views' => $this->faker->randomNumber(9),          
        ];
    }
}
