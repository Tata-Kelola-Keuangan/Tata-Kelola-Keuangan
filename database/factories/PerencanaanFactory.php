<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perencanaan;
use App\Models\Unit;

class PerencanaanFactory extends Factory
{
    protected $model = Perencanaan::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->sentence,
            'kd_perencanaan' => $this->faker->unique()->randomNumber(5),
            'sumber' => $this->faker->word,
            'revisi' => $this->faker->randomNumber(1),
            'unit_id' => function () {
                return Unit::factory()->create()->id;
            },
        ];
    }
}
