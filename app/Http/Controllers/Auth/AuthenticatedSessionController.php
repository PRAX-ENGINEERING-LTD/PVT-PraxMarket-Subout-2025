<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserActionLog;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        $userActionLog = new UserActionLog;
        $userActionLog->action = 'LOGGED IN';
        $userActionLog->loggedUserID = Auth::user()->id;
        $userActionLog->loggedUserEmail = Auth::user()->email;
        $userActionLog->loggedUserRole = Auth::user()->role;
        $userActionLog->loggedDate = Carbon::now()->format('Y-m-d');
        $userActionLog->save();

        $email = Auth::user()->email;

        if (isset(Auth::user()->countryID)) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('signup.updateCompanyDetails',[$email])->with('error', 'Your account is incomplete. Please fill the below to continue.');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {

        $userActionLog = new UserActionLog;
        $userActionLog->action = 'LOGGED OUT';
        $userActionLog->loggedUserID = Auth::user()->id;
        $userActionLog->loggedUserEmail = Auth::user()->email;
        $userActionLog->loggedUserRole = Auth::user()->role;
        $userActionLog->loggedDate = Carbon::now()->format('Y-m-d');
        $userActionLog->save();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
