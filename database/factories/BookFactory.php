<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'author' => $this->faker->name(),
            'info' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'bookfile' => $this->faker->filePath(),
            'user_id' => 4,
            'category_id' => 1,

        ];
    }
}
