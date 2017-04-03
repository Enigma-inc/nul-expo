<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     /** @test */
    public function a_user_can_see_a_homePage()
    {
        $this->get('/')
             ->assertStatus(200);
    }

    /** @test */
    public function a_user_can_see_a_sponsors_page()
    {
        $this->get('/sponsors')
             ->assertStatus(200);
    }

    /** @test */
    public function a_user_can_see_schedule_page()
    {
        $this->get('/schedule')
             ->assertStatus(200);
    }
}
