<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProcessLoginController extends Controller
{
    public function __invoke(LoginRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();

            if (Auth::attempt(['email' => $data['username'], 'password' => $data['password']])) {
                $request->session()->regenerate();
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->back()->withErrors(['credentials' => __('auth.failed')]);
        }
        catch (\Throwable $e) {
            return redirect()->route('admin.dashboard');
        }
    }
}
