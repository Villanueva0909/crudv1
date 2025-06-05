<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingfields = $request->validate([
            'name' => [' required', 'min:3', 'max:10'],
            'email' => [' required', 'email'],
            'password' => [' required', 'min:8', 'max:200']
        ]);

        $incomingFields['password'] = bcrypt($incomingfields['password']);
        User::create($incomingfields);

        return 'Hello from our controller';
    }
}
