<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    private const KEY = '$2y$12$G5Fk9uxasopfuA2KVcb8EOThpVXLHixVfq8LycZykLXmbbCnLl/2W';

    /**
     * Redirect to login page if not authentificated
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function login()
    {
        if (password_verify(request()->password, self::KEY)) {
            request()->session()->put('authentificated', true);
            return redirect(route('admin.index'));
        } else {
            return redirect(route('login'))->with('message', 'Unvalid Password');
        }
    }

    /**
     * Logout and redirect to login page
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        request()->session()->forget('authentificated');
        return redirect(route('login'))->with('message', 'Logged out');
    }
}
