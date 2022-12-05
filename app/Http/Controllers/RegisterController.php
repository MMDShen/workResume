<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
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
