<?php

namespace App\Http\Controllers;

use App\Notifications\DeleteQuestion;
use Illuminate\Http\Request;
use App\User;
use App\Question;
use Illuminate\Support\Facades\Auth;
use App\Notifications\BuildQuestion;
use App\Notifications\EditQuestion;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question;
        $edit = FALSE;
        return view('questionForm', ['question' => $question,'edit' => $edit  ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'body' => 'required|min:5',
        ], [
            'body.required' => 'Body is required',
            'body.min' => 'Body must be at least 5 characters',
        ]);

        $user = Auth::user();
        $input = request()->all();
        $question = new Question($input);
        $question->user()->associate(Auth::user());
        $question->save();

        $user->notify(new BuildQuestion());
    //dd(notify());
     return view('notification');
       //return redirect()->route('home')->with('message', 'Hello, You are being notified. Please check your email !
       // Thank You!');
        // return redirect()->route('notification.show', ['id' => $question->id]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('question')->with('question', $question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $edit = TRUE;
        return view('questionForm', ['question' => $question, 'edit' => $edit ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $input = $request->validate([
            'body' => 'required|min:5',
        ], [
            'body.required' => 'Body is required',
            'body.min' => 'Body must be at least 5 characters',
        ]);

        $user = Auth::user();
        $question->body = $request->body;
        $question->save();

        $user->notify(new EditQuestion());

        return view('notification');
      // return redirect()->route('questions.show',['question_id' => $question->id])->with('message', 'Saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $user = Auth::user();
        $question->delete();

        $user->notify(new DeleteQuestion());

       return view('notification');

       // return redirect()->route('home')->with('message', 'Deleted');
    }
}
