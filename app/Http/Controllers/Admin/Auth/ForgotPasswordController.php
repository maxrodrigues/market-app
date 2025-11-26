<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
            $token = Str::random(random_int(63, 255));
            $user = User::where('email', $request->get('email'))->firstOrFail();

            DB::table('password_reset_tokens')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $user->password = Hash::make(Carbon::now()->format('Y-m-d'));
            $user->save();

            /**
             * TODO: Send e-mail
             */

            return redirect()->back()->with(['message' => 'mensagem ']);
        } catch (Exception $e) {
            /**
             * TODO: criar script de log
             */
            return redirect()->back()->withErrors(['not_found' => 'erro']);
        }
    }

    public function validateResetLink(Request $request)
    {
        /**
         * Validar o token e redirecionar para criar nova senha.
         */
    }

    public function resetPassword(Request $request)
    {
        try {
            DB::table('password_reset_tokens')
                ->where('token', $request->token)
                ->firstOrFail();

            return view('pages.admin.auth.create-new-pass');
        } catch (Exception $e) {
            dd($e->getMessage());
            return view('pages.admin.auth.create-new-pass')
                ->with('error', $e->getMessage());
        }
    }
}
