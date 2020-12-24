<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use Livewire\Livewire;

use App\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;


    /** @test **/
    function can_view_login_page() {
        $this->get(route('auth.login'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.login');
    }

    /** @test **/
    function user_redirected_to_login_page_if_logged_in() {
        auth()->login(
            factory(User::class)->create()
        );

        $this->get(route('auth.login'))
            ->assertRedirect('/');

    }

    /** @test **/
    function can_login() {

        $user = factory(User::class)->create();

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->call('login');

        $this->assertTrue(
            auth()->user()->is(User::where('email', $user->email)->first())
        );


    }


}
