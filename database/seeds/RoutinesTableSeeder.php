<?php

use Illuminate\Database\Seeder;
use App\Routine;

class RoutinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days  = array("SUN", "MON", "TUE", "WED", "THU" );

        Routine::create([
            'batch' => "32a",
            'day' => "SUN",
            'eightnine' => "CSE 374 MI/304", 
                'nineten' => "CSE 374 MI/304",
                'teneleven' => "CSE 374 MI/304",
                'eleventwelve' => "Discussion Time(AT,MSC,BPC)",
                'twelveone' => "Discussion Time(AT,MSC,BPC)",
                'onetwo' => "Discussion Time(AT,MSC,BPC)",
                'twothree' => "CSE 362 FC/304",
                'threefour' => "CSE 362 FC/304",
                'fourfive' => "CSE 362 FC/304"
        ]);

         Routine::create([
            'batch' => "32a",
            'day' => "MON",
            'eightnine' => "CSE 329 HAC/Gallery 2", 
                'nineten' => "CSE 361 FC/304",
                'teneleven' => "CSE 331 FR/329 ",
                'eleventwelve' => "CSE 331 FR/329",
                'twelveone' => "CSE 373 MJI/304",
                'onetwo' => "x",
                'twothree' => "x",
                'threefour' => "x",
                'fourfive' => "x"
        ]);

         Routine::create([
            'batch' => "32a",
            'day' => "TUE",
            'eightnine' => "CSE 329 HAC/Gallery 2", 
                'nineten' => "CSE 361 FC/304",
                'teneleven' => "CSE 331 FR/329 ",
                'eleventwelve' => "CSE 373 MJI/304",
                'twelveone' => "x",
                'onetwo' => "x",
                'twothree' => "CSE 350 MM/BPC",
                'threefour' => "CSE 350 MM/BPC",
                'fourfive' => "CSE 350 MM/BPC"
        ]);

         Routine::create([
            'batch' => "32a",
            'day' => "WED",
            'eightnine' => "CSE 329 HAC/Gallery 2", 
                'nineten' => "CSE 361 FC/304",
                'teneleven' => "x ",
                'eleventwelve' => "CSE 373 MJI/304",
                'twelveone' => "x",
                'onetwo' => "x",
                'twothree' => "CSE 332 FR/304",
                'threefour' => "CSE 332 FR/304",
                'fourfive' => "CSE 332 FR/304"
        ]);

         Routine::create([
            'batch' => "32a",
            'day' => "THU",
            'eightnine' => "CSE 375 MSR/304", 
                'nineten' => "CSE 375 MSR/304",
                'teneleven' => "CSE 375 MSR/304 ",
                'eleventwelve' => "x",
                'twelveone' => "x",
                'onetwo' => "x",
                'twothree' => "x",
                'threefour' => "x",
                'fourfive' => "x"
        ]);

 
    
    }
    
    
}
