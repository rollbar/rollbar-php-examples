<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContextTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContextLogging()
    {
        $response = $this->get('/context');

        $response->assertStatus(200);
    }
}
