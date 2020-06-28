<?php


namespace App;


use Illuminate\Database\Eloquent\Builder;

trait Followable
{


    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function toggleFollow(User $user)
    {
        return $this->follows()->toggle($user);
    }

    public function following($user)
    {
        return $this->follows()->where('following_user_id' , $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id');
    }
}
