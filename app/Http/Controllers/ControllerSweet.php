<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSweet extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);
        // ...
    }
}
