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

    public function add(Request $req)
    {
        $restaurant = new Restaurant;

        $restaurant->name = $req->name;
        $restaurant->email = $req->email;
        $restaurant->Address = $req->address;
        $restaurant->save();

        $req->session()->flash('status', 'Restaurant Added Successfully');

        return redirect('list');
    }
}
