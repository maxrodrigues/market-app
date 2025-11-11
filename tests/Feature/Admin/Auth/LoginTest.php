<?php

use function Pest\Faker\fake;

it('has admin login page', function () {
    $this->get(route('admin.login'))
        ->assertStatus(\Symfony\Component\HttpFoundation\Response::HTTP_OK)
        ->assertViewIs('pages.admin.login');
});

it ('Check if the username/email and password fields have been filled in.', function () {
    $firstResponse = $this->post(route('admin.login.process'), [
        'username' => fake(config('app.faker_locale'))->safeEmail,
    ]);

    $firstResponse->assertSessionHasErrors(['password'])
        ->assertStatus(\Symfony\Component\HttpFoundation\Response::HTTP_FOUND);

    $secondResponse = $this->post(route('admin.login.process'), [
        'password' => fake(config('app.faker_locale'))->password,
    ]);

    $secondResponse->assertSessionHasErrors(['username'])
        ->assertStatus(\Symfony\Component\HttpFoundation\Response::HTTP_FOUND);
});

it ('Check if the password field has more than 6 characters.', function () {
    $response = $this->post(route('admin.login.process'), [
        'username' => fake(config('app.faker_locale'))->safeEmail,
        'password' => fake(config('app.faker_locale'))->words(5),
    ])->assertSessionHasErrors(['password' => __('auth.password_min'),])
        ->assertStatus(\Symfony\Component\HttpFoundation\Response::HTTP_FOUND);

});

todo ('Check if the password field contains uppercase letters, lowercase letters, and numbers.');
todo ('Returns an error when credentials do not match.');
todo ('redirects to the administrative dashboard after successful login.');
