<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_hello_route_is_accessible(): void
    {
        $response = $this->get('/hello');
        $response->assertStatus(200);
        $response->assertSee('Hello, World!');
    }

    public function test_home_route_is_accessible(): void 
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Welcome to Laravel Workflow');
    }
}
