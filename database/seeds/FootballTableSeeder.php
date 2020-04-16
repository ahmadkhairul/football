<?php

use Illuminate\Database\Seeder;
use App\football;

class FootballTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $footballs = [[
            "clubname" => "Chelsea",
            "points" => "3",
        ],[
            "clubname" => "Man United",
            "points" => "2",
        ],[
            "clubname" => "Liverpool",
            "points" => "2",
        ]];
       
        foreach($footballs as $football){
            Football::create($football);
        }
    }
}
