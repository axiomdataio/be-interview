<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    public function test_store(): void
    {
        $user = User::factory()->create();
        $payload = Post::factory()->raw();

        $this->actingAs($user);
    }
}
