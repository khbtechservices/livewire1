<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;


class ProfileTest extends TestCase
{

    use RefreshDatabase;

    /** @test **/
    function can_see_livewire_profile_component_on_profile_page() {

        $user = factory(User::class)->create();
        auth()->login($user);

        $this->actingAs($user)
            ->get('/profile')
            ->assertSuccessful()
            ->assertSeeLivewire('profile');

    }

    /** @test **/
    function can_update_profile() {

        $user = factory(User::class)->create();

        

    }

}
