<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodDiscountRequest;
use App\Models\FoodDiscount;

class FoodDiscountController extends Controller
{
    public function create(FoodDiscountRequest $request)
    {
        $data = $request->validated();
        $type = FoodDiscount::create($data);
        return redirect('food-discount-table')->with('message', 'Food Party Created Successfully');
    }

    public function read()
    {
        $types = FoodDiscount::get();
        return view('tables.food-discount-tables', compact('types'));
    }

    public function edit($id)
    {
        return view('tables.update.food-edit-discount-tables', compact("id"));
    }

    public function update(FoodDiscountRequest $request, $id)
    {
        $data = $request->validated();
        $food = FoodDiscount::find($id)->update([
            'label' => $data['label'],
            'factor' => $data['factor'],
        ]);
        return redirect('/food-discount-table')->with('message', 'Food Party Updated Successfully');
    }

    public function delete($id)
    {
        $food = FoodDiscount::find($id)->delete();
        return redirect('/food-discount-table')->with('message', 'Food Party Deleted Successfully');

    }
}
