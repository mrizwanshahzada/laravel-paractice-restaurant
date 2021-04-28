<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function delete($id)
    {
        $restaurant = Restaurant::find($id)->delete();

        Session::flash('status', 'Restaurant Deleted Successfully');

        return redirect('list');
    }

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);

        return view('restaurant.edit',['restaurant'=>$restaurant]);

    }

    public function update(Request $req)
    {
        $restaurant = Restaurant::find($req->id);

        $restaurant->name = $req->name;
        $restaurant->email = $req->email;
        $restaurant->Address = $req->address;
        $restaurant->save();

        $req->session()->flash('status', 'Restaurant Updated Successfully');

        return redirect('list');
    }


}
