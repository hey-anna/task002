<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response() ->json([
            'users' => User::all()
        ], status: 200);
            
    }
}
// Json 포맺으로 리턴
