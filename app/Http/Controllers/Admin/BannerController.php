<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;

class BannerController extends Controller
{
    public function create(BannerRequest $request)
    {
        $data = $request->validated();
        $type = Banner::create($data);
        return redirect('banner-table')->with('message', 'Banner Created Successfully');
    }

    public function read()
    {
        $types = Banner::get();
        return view('tables.banner-tables', compact('types'));
    }

    public function edit($id)
    {
        return view('tables.update.banner-edit-tables', compact("id"));
    }

    public function update(BannerRequest $request, $id)
    {
        $data = $request->validated();
        $food = Banner::find($id)->update([
            'label' => $data['label'],
            'factor' => $data['factor'],
        ]);
        return redirect('/banner-table')->with('message', 'Banner Updated Successfully');
    }

    public function delete($id)
    {
        $food = Banner::find($id)->delete();
        return redirect('/banner-table')->with('message', 'Banner Deleted Successfully');

    }
}
