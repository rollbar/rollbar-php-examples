<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AutomaticTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAutomaticLogging()
    {
        $response = $this->get('/automatic');

        $response->assertStatus(500);
    }
}
