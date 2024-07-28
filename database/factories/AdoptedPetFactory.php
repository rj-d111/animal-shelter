<?php

namespace Database\Factories;

use App\Models\AdoptedPet;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptedPetFactory extends Factory
{
    protected $model = AdoptedPet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $species = $this->faker->randomElement(['dog', 'cat']);
        $images = [
            'dog' => [
                'balbon-dog.jpg',
                'mobi-dog.jpg',
                'munti-dog.jpg',
                'rocky-dog.jpg',
                'tali-dog.jpg',
            ],
            'cat' => [
                'butternut-cat.jpg',
                'uno-cat.jpg',
                'ysa-cat.jpg',
            ],
        ];
        $breeds = [
            'dog' => [
                'Golden Retriever',
                'Labrador Retriever',
                'German Shepherd',
                'Bulldog',
                'Poodle',
                // Add more dog breeds here
            ],
            'cat' => [
                'Persian',
                'Siamese',
                'Maine Coon',
                'Bengal',
                'British Shorthair',
                // Add more cat breeds here
            ]
        ];
        $petColors = ['black', 'brown', 'white', 'gray', 'yellow'];

        $image = $this->faker->randomElement($images[$species]);
        $breed = $this->faker->randomElement($breeds[$species]);

        return [
            'name' => $this->faker->firstName,
            'species' => $species,
            'breed' => $breed,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'color' => $this->faker->randomElement($petColors),
            'age' => $this->faker->numberBetween(1, 15), // Age in years
            'description' => $this->faker->paragraph,
            'image_path' => "storage/pets/{$image}",
        ];
    }
}
