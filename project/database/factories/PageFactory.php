<?php

namespace Database\Factories;

use App\Models\Page;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        $title = $this->faker->word();

        return [
            'slug' => Str::slug($title),
            'title' => $title,
            'content' => implode(
                "\r\n",
                array_map(
                    fn($paragraph) => '<p>' . $paragraph . '</p>',
                    $this->faker->paragraphs(rand(5, 10))
                )
            ),
            'is_active' => random_int(0, 1),
        ];
    }
}
