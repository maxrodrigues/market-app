<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    public function showResetPasswordForm(): View
    {
        return view('pages.admin.auth.forgot-pass');
    }

    public function sendResetLink(Request $request)
    {
        try {
            $data = Validator::make($request->all(), [
                'email' => 'required|email'
            ]);

            $user = User::where('email', $request->get('email'))->firstOrFail();
            ResetPassword::createUrlUsing(function ($hashedToken) use ($user) {
                return $hashedToken . $user;
            });

        } catch (Exception $e) {
            /**
             * TODO: criar script de log
             */
            return redirect()->back()->withErrors(['not_found' => 'erro']);
        }
    }
}
