<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantTypeRequest;
use App\Models\RestaurantType;
use Illuminate\Http\Request;

class RestaurantTypeController extends Controller
{
    public function create(RestaurantTypeRequest $request){
        $data = $request->validated();
        $type = RestaurantType::create($data);
        return redirect('restaurant-type-table')->with('message','Restaurants Category Created Successfully');
    }

    public function read(){
        $types = RestaurantType::get();
        return view('tables.restaurant-type-tables',compact('types'));
    }
    public function edit($id){
        return view('tables.update.restaurant-edit-type-tables',compact("id"));
    }
    public function update(RestaurantTypeRequest $request, $id){
        $data = $request->validated();
        $restaurant = RestaurantType::find($id)->update(
            ['type' => $data['type'] ]
        );
        return redirect('restaurant-type-table')->with('message','Restaurants Category Updated Successfully');
    }
    public function delete($id){
        $restaurants = RestaurantType::find($id)->delete();
        return redirect('/restaurant-type-table')->with('message','Restaurants Category Deleted Successfully');

    }
}
