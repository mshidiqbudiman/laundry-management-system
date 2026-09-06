<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicPageTest extends TestCase
{
    public function test_homepage_is_available(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Family Laundry')
            ->assertSee('Website foundation');
    }
}
