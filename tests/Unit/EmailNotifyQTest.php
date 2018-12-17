<?php

namespace Tests\Unit;

use App\Notifications\BuildQuestion;
use App\Notifications\DeleteQuestion;
use App\Notifications\EditQuestion;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailNotifyQTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBuildQues()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new BuildQuestion());
        Notification::assertSentTo( [$user], BuildQuestion::class);
    }

    public function testEditQues()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new EditQuestion());
        Notification::assertSentTo( [$user], EditQuestion::class);
    }


    public function testDeleteQues()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new DeleteQuestion());
        Notification::assertSentTo( [$user], DeleteQuestion::class);
    }
}
