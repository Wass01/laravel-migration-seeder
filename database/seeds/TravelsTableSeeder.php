<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $new_travel_object = new Travel();
        $new_travel_object->destination = $faker->city();
        $new_travel_object->num_people = $faker->numberBetween(1, 10);
        $new_travel_object->type = $faker->randomElements(['famiglia', 'camping', 'amici', 'erasmus']);
        $new_travel_object->date = $faker->date();
        $new_travel_object->price = $faker->numberBetween(100, 4000);
        $new_travel_object->save();
      }
    }
}
