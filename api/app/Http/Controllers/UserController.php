<?php

namespace App\Http\Controllers;
use  App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index () 
    {
        $users = User::all();
        return response()->json($users);
    }
}
