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
    public function a_user_can_see_schedule_page()
    {
        $this->get('/schedule')
             ->assertStatus(200);
    }

    /** @test */
    public function a_user_can_see_blog_page()
    {
        $this->get('/blog')
             ->assertStatus(200);
    }

    /** @test */
    public function a_user_can_see_accomodation_page()
    {
        $this->get('/accomodation')
             ->assertStatus(200);
    }
}
