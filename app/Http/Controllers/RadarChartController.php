<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RadarChartModel;

class RadarChartController extends Controller
{
    
    public function index()
    {

        $data = \App\Models\RadarChartModel::all();
        $labels = $data->pluck('time_radar')->toArray();
        $data_radar = $data->pluck('data_radar')->toArray();

        return view('radarchart', ['data' => $data, 'labels' => $labels, 'data_radar' => $data_radar]);
    }
}