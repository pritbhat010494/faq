<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testProfile()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('#email', 'bhatkarpritam@gmail.com')
                ->type('#password', '123456')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                /*->press('#navbarDropdown')
                ->clickLink('Create Profile')
                ->assertSee('My Profile')
                ->type('#fname', 'Pritam')
                ->type('#lname', 'Bhatkar')
                ->type('#body', 'We Welcome you Pritam')
                ->press('#submit')
                ->assertSee('Profile Created')*/
                ->press('#navbarDropdown') //When profile is already created
                ->clickLink('My Profile')
                ->assertSee('My Profile')
                ->clickLink('Edit')
                ->assertSee('My Profile')
                ->type('#fname', 'Mihika')
                ->type('#lname', 'Bhatkar')
                ->type('#body', 'We welcome you')
                ->click('#submit')
                ->assertSee('Updated Profile')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });

    }

}
