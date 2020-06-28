<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function __invoke()
    {
        $users = User::paginate(50);
        return view('explore' , compact('users'));
    }
}
