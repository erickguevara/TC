<?php

namespace Database\Factories;

use App\Models\Change;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChangeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Change::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tc_venta' => 3.711,
            'tc_compra' => 3.723
        ];
    }
}
