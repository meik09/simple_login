<?php

namespace Simple\Login\Database\Factories;

use Simple\Login\App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;
        return [
            'email' => 'test' . ($number++) . '@gmail.com',
            'password' => '123456',
        ];
    }
}
