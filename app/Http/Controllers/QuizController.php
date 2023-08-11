<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('quizzes.create');
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
        dd($quiz);
    }

    public function show(Quiz $quiz)
    {
        // Отображение информации о квизе
    }

    public function startQuiz(Quiz $quiz)
    {
        // Начало прохождения квиза
    }

    public function submitQuiz(Request $request, Quiz $quiz)
    {
        // Обработка результатов прохождения квиза
    }
}
