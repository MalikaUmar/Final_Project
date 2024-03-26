<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/indian-cusine');

        $response->assertStatus(200);
    }

    public function test_homepage_works(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_cuisine_works(): void
    {
        $response = $this->get('/uyghur-cuisine');

        $response->assertStatus(200);
    }
    public function test_cuisine_detailpage_works(): void
    {
        $response = $this->get('/uyghur-cuisine/{recipe_id}');

        $response->assertStatus(200);
    }

    
}
