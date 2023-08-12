<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;

class QuizResultController extends Controller
{
    public function index(Request $request)
    {
        
        
        $userId = auth()->user()->id;
        $quizResults = QuizResult::where('user_id', $userId)->get();
        
        return view('quizzes.results.show', compact('quizResults'));
    }
}
