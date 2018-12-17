<?php

namespace Tests\Unit;

use App\Notifications\BuildAnswer;
use App\Notifications\DeleteAnswer;
use App\Notifications\EditAnswer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;

class EmailNotifyATest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBuildAns()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new BuildAnswer());
        Notification::assertSentTo( [$user], BuildAnswer::class);
    }

    public function testEditAns()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new EditAnswer());
        Notification::assertSentTo( [$user], EditAnswer::class);
    }


    public function testDeleteAns()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new DeleteAnswer());
        Notification::assertSentTo( [$user], DeleteAnswer::class);
    }
}
