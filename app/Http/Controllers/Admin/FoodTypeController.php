<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodTypeRequest;
use App\Models\FoodType;

class FoodTypeController extends Controller
{
    public function create(FoodTypeRequest $request){
        $data = $request->validated();
        $type = FoodType::create($data);
        return redirect('food-type-table')->with('message','Food Category Created Successfully');
    }

    public function read(){
        $types = FoodType::get();
        return view('tables.food-type-tables',compact('types'));
    }
    public function edit($id){
        return view('tables.update.food-edit-type-tables',compact("id"));
    }
    public function update(FoodTypeRequest $request, $id){
        $data = $request->validated();
        $food = FoodType::find($id)->update(
            ['type' => $data['type'] ]
        );
        return redirect('food-type-table')->with('message','Food Category Updated Successfully');
    }
    public function delete($id){
        $foods = FoodType::find($id)->delete();
        return redirect('/food-type-table')->with('message','Food Category Deleted Successfully');

    }
}
