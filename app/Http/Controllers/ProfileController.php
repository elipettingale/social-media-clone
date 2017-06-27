<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

}
