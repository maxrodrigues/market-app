<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordScreenController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.admin.auth.forgot-pass');
    }
}
