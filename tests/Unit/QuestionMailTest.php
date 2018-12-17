<?php

namespace Tests\Unit;

use App\Notifications\BuildQuestion;
use App\Notifications\DeleteQuestion;
use App\Notifications\EditQuestion;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionMailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBuildQues()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new BuildQuestion());

        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }
    }

    public function testEditQues()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new EditQuestion());

        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }
    }

    public function testDeleteQues()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new DeleteQuestion());

        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }
    }

}