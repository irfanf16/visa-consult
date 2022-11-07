<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\TestingRecord;

class TestingRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TestingRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name(),
            'email'       => $this->faker->email(),
            'description' => $this->faker->sentence(1),
            // 'description' => $this->faker->paragraph(6),
            'age'         => Str::random(2),
            'status'      => true,
            'featured'    => (bool)random_int(false, true)
        ];
    }
}