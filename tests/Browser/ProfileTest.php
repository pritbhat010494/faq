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
            $browser->visit('http://localhost:8000/user/15/profile')
                ->assertSee('My Profile');

        });
    }


}
