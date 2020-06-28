<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets =  auth()->user()->timeline();
        return view('tweets.index' , compact('tweets'));
    }

    public function store()
    {
        $validateData = request()->validate([
           'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $validateData['body']
        ]);

        return redirect()->route('home');
    }
}
