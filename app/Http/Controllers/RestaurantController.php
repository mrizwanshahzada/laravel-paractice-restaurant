<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function list()
    {
        $restaurants = Restaurant::all();
        return view('restaurant.list',(['restaurants' => $restaurants]));
        // return view('restaurant.list',compact(['restaurants']));
    }
}
