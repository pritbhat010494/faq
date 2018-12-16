<?php

namespace Tests\Feature;

use Illuminate\Mail\Mailable;
use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ENotifyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testENotify()
    {
        Mail::fake();

        $user  = factory(\App\User::class)->make();
        $user->save();


        Mail::to($user->email)->send(new Mailable());
        $this->assertTrue(true);
    }
}
