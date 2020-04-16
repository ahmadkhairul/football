<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Football;

class FootballController extends Controller
{
    public function index(){
        $data = Football::all();
        return response()->json(['message' => 'Get League Standing Success', 'data' => $data]);       
    }

    public function store(Request $request)
    {
        function get_point($point){
            if ($point[0] > $point[1]){
                $point_home = 3;
                $point_away = 0;
            }else if ($point[0] < $point[1]){
                $point_home = 0;
                $point_away = 3;
            }else{
                $point_home = 1;
                $point_away = 1;
            }

            return [$point_home, $point_away];
        }

        function update_point($club, $point){
            $home = Football::where('clubname', $club)->first();

            if ($home) {
                $home_point = $point + $home->points;
                $home->update(['points' => $home_point]);
            }else {
                $home = Football::create([
                    'clubname' => $club,
                    'points' => $point
                ]);
            }   

            return $home;
        }

        $football = [];
        foreach ($request->data as $data){
           $point = get_point(explode(' : ', $data['score']));
           $home = update_point($data['clubhomename'], $point[0]);
           $away = update_point($data['clubawayname'], $point[1]);
           array_push($football, ['home' => $home, 'away' => $away]);
        }

        return response()->json(['message' => 'Game Recorded', 'data' => $football]);
    }

    public function rank(Request $request){
        $club = explode('"',$request->clubname);
       
        $collection = collect(Football::orderBy('points', 'DESC')->get());
        $data       = $collection->where('clubname', $club[1]);
        $value      = $data->keys()->first() + 1;

        $data = ['clubname' => $club[1], 'standing' => $value];

        return response()->json(['message' => 'Get Rank Success', 'data' => $data]);       
    }
}
