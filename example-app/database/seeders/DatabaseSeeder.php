<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Meal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Meal::create([
            'category' => $faker->randomElement(['Kategorija 1', 'Kategorija 2', 'Kategorija 3', 'Bez kategorije']),
            'title' => $faker->word,
            'tags' => $faker->randomElement(['tag 1', 'tag 2', 'tag 3']),
            'ingredients' => $faker->randomElement(['ingredient 1', 'ingredient 2', 'ingredient 3'])
        ]);
    }
}
