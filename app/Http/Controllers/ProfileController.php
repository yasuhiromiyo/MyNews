<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profiles;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profiles::all();

               return view('profile.index', ['posts' => $posts]);
    }
}
