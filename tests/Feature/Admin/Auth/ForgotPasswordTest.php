<?php

# FIRST STEP
use Symfony\Component\HttpFoundation\Response;

it ("has forgot password page", function () {
    $this->get(route('admin.reset-password'))
        ->assertStatus(Response::HTTP_OK);
});

it ("return error when user doesnt exists", function () {
    $user = \App\Models\User::factory()->create();
    $this->post(route('admin.reset-password'), ['email' => 'testemail@test.com'])
        ->assertSessionHasErrors(['not_found'])
        ->assertStatus(Response::HTTP_FOUND);
});

it ("reset user password", function () {

});

todo("create temporary recover link");
todo("send email when found user");

# SECOND STEP
todo("return error when recover link is invalid");
todo("return error when password is invalid");
todo("redirect user when recover password");
