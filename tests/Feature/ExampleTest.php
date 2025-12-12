<?php

it('has example page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('example2', function () {
    $page = visit('/');
    $page->assertSee('FreshMart');
});
