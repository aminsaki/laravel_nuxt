<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Tests\TestCase;

class UserTest extends TestCase
{
//    use RefreshDatabase;
    use DatabaseMigrations;

    /**
     *  View the home page of the site
     */

    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



    public function test_user_read_all()
    {
        $user = User::factory()->create();
        $response = $this->get('api/users');
        $response->assertSee($user->email);
        $response->assertStatus(200);



    }

}




















