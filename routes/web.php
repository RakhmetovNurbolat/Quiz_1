<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
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
// Route::middleware('guest')->group(function(){
//     Route::get('/register', [RegisterController::class, 'index'])->name('register');
//     Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//     Route::get('/login', [LoginController::class, 'index'])->name('login');//->withoutMiddleware('quest');
//     Route::post('/login', [LoginController::class, 'store'])->name('login.store');
// });

Route::middleware('guest')->group(function () {
    // отображение формы регистрации
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    // прием данных с формы регистрации
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

    // отображение формы логина
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    // прием данных с формы логина
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    // роутер для выхода из своего аккаунта
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');

Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');

Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');

Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');
Route::delete('/quizzes/{quiz}', [QuizController::class, 'delete'])->name('quizzes.delete');

Route::get('/quizzes/{quiz}/start', [QuizController::class, 'startQuiz'])->name('quizzes.start');
Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submitQuiz'])->name('quizzes.submit');

Route::get('/questions/create/{quiz}', [QuestionController::class,'create'])->name('questions.create');
Route::post('/questions',  [QuestionController::class,'store'])->name('questions.store');




//-----------------------------------------------------
