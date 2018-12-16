<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Question;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user  = factory(\App\User::class)->make();

        $question = factory(\App\Question::class)->make();
        $user->save();

        $question->user()->associate($user);
        $question->save();

        $answer = factory(\App\Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);
        $answer->save();
        $this->assertTrue(true);
    }
}
