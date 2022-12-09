<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class BannerController extends Controller
{
    public function create(BannerRequest $request)
    {
        $data = $request->validated();
        if(auth::user()->role == 0)
            $data['label'] = 'src';
        else
            $data['label'] = 'href';
        $image = $request->value;
        $imageName = time() . '.' . $image->extension();

        $image->storeAs('images', $imageName);
        $data['value'] = $imageName;
        $type = Banner::create($data);
        return redirect('banner-table')->with('message', 'Banner Created Successfully');
    }

    public function read()
    {
        $types = Banner::get();
        return view('tables.banner-tables', compact('types'));
    }


    public function delete($id)
    {
        $image = Banner::find($id);
        if($image->label == 'src'){
            $image_path = 'images/'.$image->value;
            if(File::exists($image_path))
                File::delete($image_path);
        }
        $image->delete();
        return redirect('/banner-table')->with('message', 'Banner Deleted Successfully');

    }
}
