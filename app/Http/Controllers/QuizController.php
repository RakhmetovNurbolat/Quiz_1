<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::query()->get();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);
       
        $quiz = Quiz::query()->create([
            'user_id'       => User::query()->value('id'),
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);
        return redirect()->route('quizzes.show', ['quiz' => $quiz->id]);
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quiz'));
    }

    public function edit(Quiz $quiz){
        return view('quizzes.edit', compact('quiz'));
    }
    public function update(Request $request, Quiz $quiz){
        
        $quiz->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
    
        return redirect()->route('quizzes.show', ['quiz' => $quiz->id]);
    }

    public function delete(Quiz $quiz){
        $quiz->delete();
        return redirect()->route('quizzes');
    }

    // public function startQuiz(Quiz $quiz)
    // {
    //    
    // }

    // public function submitQuiz(Request $request, Quiz $quiz)
    // {
    //     
    // }
}
