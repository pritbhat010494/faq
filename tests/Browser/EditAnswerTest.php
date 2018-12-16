<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('#email', 'bhatkarpritam@gmail.com')
                ->type('#password', '123456')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('View')
                ->assertsee('Answer Question')
                ->clickLink('View')
                ->clickLink('Edit Answer')
                ->type('#body', 'Welcome You, Pritam')
                ->press('#submit')
                ->assertSee('Hello, You are being notified. Please check your email !
Thank You!')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
