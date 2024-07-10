<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

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
        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role === 'admin') {
            Session::flash('success', 'Selamat datang Admin!');
            return redirect()->intended(route('dashboardAdmin'));
        } elseif ($user->role === 'member') {
            Session::flash('success', 'Selamat datang Member!');
            return redirect()->intended(route('dashboard'));
        }

        Session::flash('success', 'Selamat datang!');
        return redirect()->intended(route('/'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Session::flash('success', 'Anda telah berhasil logout.');
        return redirect('/');
    }
}
