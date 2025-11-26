<?php

# FIRST STEP
use Carbon\Carbon;
use Illuminate\Support\Str;
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
it ("return error when recover link is invalid", function () {
    $this->get(route('admin.reset-password.get', ['token' => Str::random(60)]))
        ->assertStatus(Response::HTTP_FOUND)
        ->assertSessionHasErrors(['not_found']);
});

it ("return error when password is invalid", function () {
    $dataUser = [
        'email' => 'testemail@test.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ];

    $this->post(route('admin.reset-password.post'), $dataUser)
        ->assertStatus(Response::HTTP_FOUND)
        ->assertSessionHasErrors(['password']);

});

it ("redirect user when recover password", function () {
    $user = \App\Models\User::factory()->create();
    $pwd = fake()->password(6, 15);
    $dataUser = [
        'email' => $user->email,
        'password' => $pwd,
        'password_confirmation' => $pwd,
    ];

    $this->post(route('admin.reset-password.post'), $dataUser)
        ->assertSessionHasNoErrors()
        ->assertStatus(Response::HTTP_FOUND)
        ->assertRedirect(route('admin.dashboard'));
});
