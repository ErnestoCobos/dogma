<?php

namespace Database\Factories;

use App\Models\MoneyAccount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MoneyAccountFactory extends Factory
{
    protected $model = MoneyAccount::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'balance' => $this->faker->randomFloat(),
            'currency' => $this->faker->word(),
            'account_type' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
