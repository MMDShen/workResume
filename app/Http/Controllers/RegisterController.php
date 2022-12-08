<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class RegisterController extends Controller
{
    public function create()
    {
        $admin = User::where('role','0')->get()->toArray();
        if(count($admin) > 0){
            $class = 'display: none';
        } else
            $class = "";
        return view('session.register',compact("class"));
    }

    public function store(UserRequest $request)
    {
        $validated = $request->validated();

        $request['password'] = bcrypt($request['password'] );
        session()->flash('success', 'Your account has been created.');
        $user = User::create($request->toArray());
        Auth::login($user);
        return redirect('/dashboard');
    }
}
