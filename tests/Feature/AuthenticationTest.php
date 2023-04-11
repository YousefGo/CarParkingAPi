<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class AuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    use DatabaseMigrations;
    public function testUserCanLoginWithCorrectCredentials()
    {
        $user = User::factory()->create();
 
        $response = $this->postJson('/api/v1/auth/login', [
            'email'    => $user->email,
            'password' => 'password',
        ]);
 
        $response->assertStatus(201);
    }

    public function testUserCannotLoginWithIncorrectCredentials()
    {
        $user = User::factory()->create();
 
        $response = $this->postJson('/api/v1/auth/login', [
            'email'    => $user->email,
            'password' => 'wrong_password',
        ]);
 
        $response->assertStatus(422);
    }


}
