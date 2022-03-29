<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use \App\Models\User;
use \App\Models\NameModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(User $user)
    {
        return view('user.create', compact('user'));
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'middlename' => 'required'
        ]);

        auth()->user()->names()->create($data);


        return redirect('/users');
    }
    public function destroy($users)
    {

        $blog = NameModel::FindOrFail($users);

        $blog->delete();

        return redirect('/users');
    }
}
