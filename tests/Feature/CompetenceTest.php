<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompetenceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function it_creates_users()
    {
        factory(App\User::class)->create();
    }
}
