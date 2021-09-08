<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\HelpRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelpRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HelpRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agency_id'   => Agency::query()->inRandomOrder()->first()->id,
            'name'        => $this->faker->name(),
            'email'       => $this->faker->safeEmail(),
            'baranggay'   => $this->faker->streetAddress(),
            'city'        => $this->faker->city(),
            'description' => $this->faker->paragraph(),
            'code'        => $this->faker->safeHexColor(),
            'status'      => 'pending',
        ];
    }
}
