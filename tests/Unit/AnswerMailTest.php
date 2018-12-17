<?php

namespace Tests\Unit;

use App\Notifications\BuildAnswer;
use App\Notifications\DeleteAnswer;
use App\Notifications\EditAnswer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;

class AnswerMailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBuildAns()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new BuildAnswer());

        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }
    }

    public function testEditAns()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new EditAnswer());

        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }
    }

    public function testDeleteAns()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new DeleteAnswer());

        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }
    }
}
