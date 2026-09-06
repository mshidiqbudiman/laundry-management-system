<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CreateAdminUserCommandTest extends TestCase
{
    use RefreshDatabase;

    public function test_command_creates_an_admin_user_without_seeded_credentials(): void
    {
        $this->artisan('app:create-admin')
            ->expectsQuestion('Name', 'Laundry Operator')
            ->expectsQuestion('Email address', 'operator@example.test')
            ->expectsQuestion('Password (minimum 12 characters)', 'a-secure-password')
            ->expectsQuestion('Confirm password', 'a-secure-password')
            ->expectsOutput('Administrator account created.')
            ->assertSuccessful();

        $user = User::where('email', 'operator@example.test')->firstOrFail();

        $this->assertTrue(Hash::check('a-secure-password', $user->password));
    }
}
