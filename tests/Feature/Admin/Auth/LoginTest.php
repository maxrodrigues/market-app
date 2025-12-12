<?php

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

use function Pest\Faker\fake;

it('has admin login page', function () {
    $this->get(route('admin.login'))
        ->assertStatus(Response::HTTP_OK)
        ->assertViewIs('pages.admin.login');
});

it('Check if the username/email and password fields have been filled in.', function () {
    $firstResponse = $this->post(route('admin.login.process'), [
        'username' => fake(config('app.faker_locale'))->safeEmail,
    ]);

    $firstResponse->assertSessionHasErrors(['password'])
        ->assertStatus(Response::HTTP_FOUND);

    $secondResponse = $this->post(route('admin.login.process'), [
        'password' => fake(config('app.faker_locale'))->password,
    ]);

    $secondResponse->assertSessionHasErrors(['username'])
        ->assertStatus(Response::HTTP_FOUND);
});

it('Check if the password field has more than 6 characters.', function () {
    $response = $this->post(route('admin.login.process'), [
        'username' => fake(config('app.faker_locale'))->safeEmail,
        'password' => fake(config('app.faker_locale'))->words(5),
    ])->assertSessionHasErrors(['password' => __('auth.password_min')])
        ->assertStatus(Response::HTTP_FOUND);

});

it('Returns an error when credentials do not match.', function () {
    $this->post(route('admin.login.process'), [
        'username' => fake(config('app.faker_locale'))->safeEmail,
        'password' => fake(config('app.faker_locale'))->password(6, 128),
    ])
        ->assertSessionHasErrors([
            'credentials' => __('auth.failed'),
        ])
        ->assertStatus(Response::HTTP_FOUND);
});

it('redirects to the administrative dashboard after successful login.', function () {
    $user = User::factory()->create([
        'password' => 'p@ssw0rdS',
    ]);

    $this->post(route('admin.login.process'), [
        'username' => $user->email,
        'password' => 'p@ssw0rdS',
    ])
        ->assertSessionHasNoErrors()
        ->assertStatus(Response::HTTP_FOUND)
        ->assertRedirect(route('admin.dashboard'));
});

todo('Check if the password field contains uppercase letters, lowercase letters, and numbers.');
