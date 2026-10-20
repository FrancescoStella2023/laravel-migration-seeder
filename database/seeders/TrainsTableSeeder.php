<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 40; $i++) {

            $new_train = new Train();

            $new_train->train_code = $faker->numberBetween(1, 20);
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();


            $departure = $faker->dateTimeBetween('now', '+7 days');

            $arrival = (clone $departure)->modify(
                '+' . $faker->numberBetween(30, 240) . ' minutes'
            );


            $new_train->departure_time = $departure->format('Y-m-d H:i:s');
            $new_train->arrival_time = $arrival->format('Y-m-d H:i:s');
            $new_train->carriage_number = $faker->numberBetween(5, 25);
            $new_train->cancelled = $faker->boolean(5);
            $new_train->on_time = $new_train->cancelled ? false : $faker->boolean(85);

            $new_train->save();
        }
    }
}
