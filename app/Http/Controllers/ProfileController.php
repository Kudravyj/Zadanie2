<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\User;
use \App\Models\NameModel;
class ProfileController extends Controller
{
    public function index(User $user)
    {   
        //view profile with authentification user and their information
        $user = auth()->user();
        $newUser = auth()->user()->names();
        return view('dashboard', compact('user', 'newUser'));
    }
}
