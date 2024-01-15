<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence;
        $slug = Str::slug($title, '-');


        return [
            'title' => $title,
            'user_id' => DB::table('users')
                ->inRandomOrder()
                ->value('id'),
            'slug' => $slug,
            'excerpt' => fake()->sentence,
            'description' => $this->faker->sentence,
            'is_published' => $this->faker->boolean,
            'min_to_read' => $this->faker->randomDigit(),
        ];
    }
}
