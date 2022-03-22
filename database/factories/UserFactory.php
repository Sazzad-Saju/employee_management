<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'phone'=> $this->faker->unique()->phoneNumber,
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'password'=>bcrypt('123qwe'),
            'password' => '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW',
            // 'password' => bcrypt('123qwe'),
            'remember_token' => Str::random(10),
        ];
    }
}
