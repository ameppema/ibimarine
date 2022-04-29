<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('login');
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

        $this->authenticated(auth()->user());

        $request->session()->regenerate();

        if(auth()->user()->hasRole('admin')){
            return redirect()->route('admin');
        }
        return redirect()->route('admin.calendar');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function authenticated($user){
        $user->update([
            'last_session' => Carbon::now()->toDateTimeString()
        ]);
    }
    /**
     * Deny LogIn if user account is inactive
     */
    protected function validateLogin(Request $request){
        $user = User::where($this->username(), '=', $request->input($this->username()))->first();
        if ($user && ! $user->status) {
            throw ValidationException::withMessages([$this->username() => __('The account is inactive')]);
        }
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
}
