<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        $tweets = $user->tweets()->withLikes()->paginate(5);
        return view('profiles.show' , compact('user' , 'tweets'));
    }

    public function edit(User $user)
    {
//        $this->authorize('edit' , $user);
        return view('profiles.edit' , compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' =>  ['file'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
