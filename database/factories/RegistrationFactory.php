<?php

namespace Database\Factories;

use App\Models\CourseEvent;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'event_id' => CourseEvent::factory(),
            'participant_id' => Participant::factory(),
            'active' => $this->faker->boolean(),
        ];
    }
}
