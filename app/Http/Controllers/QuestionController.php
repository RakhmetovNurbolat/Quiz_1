<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Option;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Quiz $quiz)
    {
        return view('questions.create', compact('quiz'));
    }

    public function store(Request $request)
    {
        
        //dd($request->toArray());

        $validated = $request->validate([
            'question_text'     => ['required','string'],
            'option'           => ['required','array','min:2'], 
            'correct_option'    => ['required','integer','between:0,' . (count($request->input('options')) - 1)],
        ]);

        
        $question = new Question();
        $question->text = $request->input('question_text');
        $question->quiz_id = $request->input('quizId');
        //$question->save();

       
        foreach ($request->input('options') as $index => $optionText) {
            $option = new Option();
            $option->text = $optionText;
            $option->is_correct = ($index == $request->input('correct_options'));
            $option->question_id = $question->id;
            //$option->save();
        }

        return redirect()->route('quizzes'); 
    }
}