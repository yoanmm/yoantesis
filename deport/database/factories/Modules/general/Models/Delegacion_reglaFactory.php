<?php

namespace Database\Factories\Modules\general\Models;

use Illuminate\Database\Eloquent\Factories\Factory;

class Delegacion_reglaFactory extends Factory
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

