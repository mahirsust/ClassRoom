<?php

use Illuminate\Database\Seeder;

class RoutinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $days  = array("SUN", "MON", "TUE", "WED", "THU" );

    	for($i = 0; $i < 5; $i++) {
        App\Routine::create([
        	'batch' => "11b",
        	'day' => $days[$i],
            'eightnine' => $faker->name, 
                'nineten' => $faker->name,
                'teneleven' => $faker->name,
                'eleventwelve' => $faker->name,
                'twelveone' => $faker->name,
                'onetwo' => $faker->name,
                'twothree' => $faker->name,
                'threefour' => $faker->name,
                'fourfive' => $faker->name
        ]);

         App\Routine::create([
        	'batch' => "22a",
        	'day' => $days[$i],
            'eightnine' => $faker->name, 
                'nineten' => $faker->name,
                'teneleven' => $faker->name,
                'eleventwelve' => $faker->name,
                'twelveone' => $faker->name,
                'onetwo' => $faker->name,
                'twothree' => $faker->name,
                'threefour' => $faker->name,
                'fourfive' => $faker->name
        ]);

         App\Routine::create([
        	'batch' => "32a",
        	'day' => $days[$i],
            'eightnine' => $faker->name, 
                'nineten' => $faker->name,
                'teneleven' => $faker->name,
                'eleventwelve' => $faker->name,
                'twelveone' => $faker->name,
                'onetwo' => $faker->name,
                'twothree' => $faker->name,
                'threefour' => $faker->name,
                'fourfive' => $faker->name
        ]);

         App\Routine::create([
        	'batch' => "41a",
        	'day' => $days[$i],
            'eightnine' => $faker->name, 
                'nineten' => $faker->name,
                'teneleven' => $faker->name,
                'eleventwelve' => $faker->name,
                'twelveone' => $faker->name,
                'onetwo' => $faker->name,
                'twothree' => $faker->name,
                'threefour' => $faker->name,
                'fourfive' => $faker->name
        ]);
    }
    
    }
}
