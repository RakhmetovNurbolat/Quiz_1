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
        
        // dd($request->toArray());

        $request->validate([
            'questions'                     => 'required|array|min:1',
            'questions.*.text'              => 'required|string|max:255',
            'questions.*.options'           => 'required|array|min:2',
            'questions.*.options.*'         => 'required|string|max:255',
            'questions.*.correct_option'    => 'required|integer|min:0',
        ]);

        

        foreach ($request->questions as $questionData) {
            $question = Question::create([
                'quiz_id' => $request->input('quizId'),
                'text' => $questionData['text'],
            ]);
            
            foreach ($questionData['options'] as $index => $optionText) {
                $isCorrect = ($index == $questionData['correct_option']);
                Option::create([
                    'question_id' => $question->id,
                    'text' => $optionText,
                    'is_correct' => $isCorrect,
                ]);
            }
        }
        return redirect()->route('quizzes'); 
    }
}