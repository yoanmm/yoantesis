<?php

namespace Database\Factories\Modules\security\Models;

use Illuminate\Database\Eloquent\Factories\Factory;

class Usuario_rolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($this->faker);
        return [
        ];
    }
}

