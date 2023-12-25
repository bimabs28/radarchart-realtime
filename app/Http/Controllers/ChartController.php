<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RadarChartModel;

class ChartController extends Controller
{
      public function readdata(){
        $data = \App\Models\RadarChartModel::orderBy('time_radar', 'DESC')->first();
        return response()->json($data);
    }
}