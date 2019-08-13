<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cars = Car::all();

        // foreach ($cars as $car){

        //     $carPhotos = $car->carPhoto;

        //     foreach ($carPhotos as $carPhoto ) {
        //         echo $carPhoto->path;
        //     }
        // }

        return view('home', compact('cars'));
    }
}
