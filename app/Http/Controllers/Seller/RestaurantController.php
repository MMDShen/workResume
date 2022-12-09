<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function create(RestaurantRequest $request){
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        Restaurant::create($data);
        return redirect('restaurant')->with('message','Restaurants Category Created Successfully');
    }
    public function read(){
        if(! is_null(User::find(Auth::user()->id)->restaurant))
            $types = User::find(Auth::user()->id)->restaurant->get();
        else
            $types = [];

        if(is_null($types))
            $types = [];
        return view('tables.restaurant-tables',compact('types'));
    }
    public function edit($id){
        return view('tables.update.restaurant-edit-tables',compact("id"));
    }
    public function update(RestaurantRequest $request, $id){
        $data = $request->validated();
        Restaurant::find($id)->update([
            'is_open' => $data['is_open'],
            'title' => $request['title'],
            'longitude' => $request['longitude'],
            'latitude' => $request['latitude'],
            'address' => $request['address'],
            'restaurant_type' => $request['restaurant_type'],
            ]);
        return redirect('restaurant')->with('message','Restaurants Category Updated Successfully');
    }
    public function delete($id){
        $restaurants = Restaurant::find($id)->delete();
        return redirect('/restaurant')->with('message','Restaurants Category Deleted Successfully');

    }
}
