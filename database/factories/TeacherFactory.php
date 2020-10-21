<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $name = $this->faker->firstName;
        $email =strtolower($name) . "@" . $this->faker->freeEmailDomain;
        $fullName = $name . " " . $this->faker->lastName;
        return [

            'name' => $fullName,
            'email' => $email,
            'phone' => $this->faker->phoneNumber,
            'title'=> $this->faker->title($gender),
        ];
    }
}
