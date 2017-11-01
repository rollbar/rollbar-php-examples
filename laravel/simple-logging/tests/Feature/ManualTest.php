<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManualTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testManualLogging()
    {
        $response = $this->get('/manual');

        $response->assertStatus(200);
    }
}
