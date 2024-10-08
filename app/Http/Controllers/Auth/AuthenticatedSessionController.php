<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $id = Auth::user()->id;
        $adminData = User::find($id);
        $username = $adminData->name;

        $request->session()->regenerate();

        $notification = array(
            'message' => 'User '.$username.' Login Successfully',
            'alert-type' => 'success'
        );

        $url = '';
        if ($request->user()->role === 'admin') {
            $url = 'admin/dashboard';
        } elseif ($request->user()->role === 'user') {
            $url = 'user/dashboard';
        }

        return redirect()->intended($url)->with($notification);
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
