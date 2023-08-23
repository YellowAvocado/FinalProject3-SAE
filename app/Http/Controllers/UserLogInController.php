<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedIn;
use Illuminate\Http\Request;

class UserLogInController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        event(new UserLoggedIn($user));

        return redirect()->intended($this->redirectPath());
    }
}
