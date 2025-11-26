<?php

# FIRST STEP
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

it ("has forgot password page", function () {
    $this->get(route('admin.forgot-password.get'))
        ->assertStatus(Response::HTTP_OK);
});

it ("return error when user doesnt exists", function () {
    $this->post(route('admin.forgot-password.post'), ['email' => 'testemail@test.com'])
        ->assertSessionHasErrors(['not_found'])
        ->assertStatus(Response::HTTP_FOUND);
});

it ("reset user password", function () {
    $user = \App\Models\User::factory()->create();
    $this->post(route('admin.forgot-password.post'), ['email' => $user->email]);

    $this->assertDatabaseCount('password_reset_tokens', 1);
    $this->assertDatabaseHas('password_reset_tokens', ['email' => $user->email]);
});

it ("create temporary recover link", function () {
    $user = \App\Models\User::factory()->create();
    $this->post(route('admin.forgot-password.post'), ['email' => $user->email]);

    $resetTokens = \Illuminate\Support\Facades\DB::table('password_reset_tokens')
        ->where('email', $user->email)
        ->select(['email', 'token', 'expires_at'])
        ->first();

    $this->get(route('admin.reset-password.get', ['token' => $resetTokens->token]))
        ->assertStatus(Response::HTTP_OK);
});

todo("send email when found user");

# SECOND STEP
todo("return error when recover link is invalid");
todo("return error when password is invalid");
todo("redirect user when recover password");
