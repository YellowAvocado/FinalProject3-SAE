<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedInEvent;
use Illuminate\Http\Request;

class UserLogInController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        event(new UserLoggedInEvent($user));

        return redirect()->intended($this->redirectPath());
    }
}
