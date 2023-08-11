<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home.index')->name('home');

Route::redirect('/home' , '/')->name('home.redirect');


//Route::middleware('guest')->group(function(){
Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login');//->withoutMiddleware('quest');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});


Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');

Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');

Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::get('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');

Route::get('/quizzes/{quiz}/start', [QuizController::class, 'startQuiz'])->name('quizzes.start');
Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submitQuiz'])->name('quizzes.submit');



//-----------------------------------------------------
