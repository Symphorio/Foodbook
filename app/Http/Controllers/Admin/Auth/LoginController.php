<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('admin.dashboard'); // FORCER la redirection admin
    }

    return back()->withErrors(['email' => 'Identifiants incorrects.']);
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    protected function redirectTo()
{
    return route('admin.dashboard'); // Redirection forcée
}

}
