<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use illuminate\Support\str;
use App\Pots;

class PotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $post = new pots();
            $title = $faker->words(rand(1, 5),true);
            $slug =  $post->generateSlug($title);
            Pots::create([
                'title' => $title,
                'content'=> $faker->text(rand(100, 200),true),
                'slug'=> $slug,
            ]);
        }
    }
}
