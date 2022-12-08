<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodPartyRequest;
use App\Models\FoodParty;

class FoodPartyController extends Controller
{
    public function create(FoodPartyRequest $request)
    {
        $data = $request->validated();
        $type = FoodParty::create($data);
        return redirect('food-party-table')->with('message', 'Food Party Created Successfully');
    }

    public function read()
    {
        $types = FoodParty::get();
        return view('tables.food-party-tables', compact('types'));
    }

    public function edit($id)
    {
        return view('tables.update.food-edit-party-tables', compact("id"));
    }

    public function update(FoodPartyRequest $request, $id)
    {
        $data = $request->validated();
        $food = FoodParty::find($id)->update([
            'label' => $data['label'],
            'factor' => $data['factor'],
            'max' => $data['max'],
        ]);
        return redirect('/food-party-table')->with('message', 'Food Party Updated Successfully');
    }

    public function delete($id)
    {
        $food = FoodParty::find($id)->delete();
        return redirect('/food-party-table')->with('message', 'Food Party Deleted Successfully');

    }
}
