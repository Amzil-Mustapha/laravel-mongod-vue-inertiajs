<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GlobalController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->where('password', $request->password)->get()->first();

        if (!is_null($user)) {
            session([
                'username' => $user->username,
                'email' => $user->email,
                "_id" => $user->_id
            ]);
            return redirect('/');
        }
        $info = 'User Not Found!';
        return Inertia::render('Login', compact('info'));
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}