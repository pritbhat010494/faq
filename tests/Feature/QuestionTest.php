<?php

namespace Tests\Feature;

use Tests\TestCase;
use  App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user  = factory(\App\User::class)->make();
        $user->save();

        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->save();
        $this->assertTrue(true);
    }
}
