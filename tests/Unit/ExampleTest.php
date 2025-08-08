<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{


    public function test_home_route_is_accessible(): void 
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Laravel has an incredibly rich ecosystem.');
    }
}
