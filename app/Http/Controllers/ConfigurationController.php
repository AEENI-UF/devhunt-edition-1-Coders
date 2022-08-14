<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index(){
         $config = Configuration::all();
         return response()->json($config,200);
    }

    public function store(Request $request){
        $config = $request->validate([
            'duree' => 'required',
            'typeduree' => 'required',
            'forfait' => 'required',
        ]);
        $request->duree = $this->Timeconfig($request->duree,$request->typeduree);
        $request->forfait = $this->
        $config = new Configuration($config);
        $config->duree = 
        $config->save();
        return response()->json($config,200);
    }
    public function show($id){
        $config = Configuration::find($id);
        return response()->json($config, 200);
    }

    public function update(Request $request, $id){
        $config = Configuration::find($id);
        $config->update($request->all());
        return response()->json($config,200);
    }
    
    public function Timeconfig($val,$type_val){
        $tab_val = array("day", "hour", "minute"); 
        if (!(in_array($type_val, $tab_val))) 
        return 0;
        $tab = array_flip($tab_val); 
       
        $diff = $tab[$type_val] - 2; 
        //dd($diff);
        if ($diff == -2) {
            $dt = Carbon::now();
            $hours = $dt->diffInHours($dt->copy()->addDays($val));
            $minutes = $dt->diffInMinutes($dt->copy()->addHours($hours));
            $seconds = $dt->diffInSeconds($dt->copy()->addMinutes($minutes));
            return $seconds;
        }
       else if ($diff == -1) {
            $dt = Carbon::now();
             $minutes = $dt->diffInMinutes($dt->copy()->addHours($val));
            $seconds = $dt->diffInSeconds($dt->copy()->addMinutes($minutes));
            return $seconds;
        }
        else{
            $dt = Carbon::now();
            $seconds = $dt->diffInSeconds($dt->copy()->addMinutes($val));
            return $seconds;
        }
         
    }
    function ConvertConfig($val , $type_val){
        $tab_val = array("Mo", "Go"); 
         if (!(in_array($type_val, $tab_val))) 
         return 0; 
         $tab = array_flip($tab_val); 
         $diff = $tab[$type_val] - 0; 
         if ($diff != 0) {
            return $val;
         }

            return ($val * pow(1024, $diff)); 
         }
        
       
       }
}
