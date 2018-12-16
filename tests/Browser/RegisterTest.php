<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Register')
                ->assertSee('Register')
                ->type('#email', 'bhatkarpritam@gmail.com')
                ->type('#password', '123456')
                ->type('#password-confirm', '123456')
                ->click('button[type="submit"]');
            $this->assertTrue(true);
        });
    }
}
