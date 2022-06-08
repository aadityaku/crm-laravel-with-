<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['companie']=Companie::withcount("employee")->get();
        return view("homepages/dashboard",$data);
    }

    public function distance(){
        $data['distance']=State::all();
         return view("homepages/distance",$data);
    }
}
