<?php

namespace Database\Factories;

use App\Enums\TournamentApprovalStatusEnum;
use App\Enums\TournamentTypeEnum;
use App\Models\GameCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'game_categories_id' => function () {
                return GameCategory::inRandomOrder()->first()->id;
            },
            'name' => $this->faker->word,
            'bracket_link' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'registration_open' => $this->faker->dateTime,
            'registration_close' => $this->faker->dateTime,
            'event_start' => $this->faker->dateTime,
            'registration_price' => $this->faker->numberBetween(100000, 1000000),
            'event_end' => $this->faker->dateTime,
            'rules' => $this->faker->paragraph,
            'poster_image' => $this->faker->imageUrl,
            'pic_name' => $this->faker->name,
            'number_of_teams' => $this->faker->numberBetween(1, 10),
            'pic_contact' => $this->faker->phoneNumber,
            'pic_email' => $this->faker->email,
            'event_type' => $this->faker->randomElement(TournamentTypeEnum::cases()),
            'status' => $this->faker->randomElement(TournamentApprovalStatusEnum::cases()),
        ];
    }
}
