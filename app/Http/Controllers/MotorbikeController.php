<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function index(){

    $data = ['Rusi','Euro','Wave'];
    $total = count($data);

        return view('motorbikes.index',[
            'bike' => $data,
            'totalMotorbike' => $total
        ]);
    }
}
