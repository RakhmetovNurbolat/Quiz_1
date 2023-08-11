<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'question_id', 
        'text', 'is_correct',
    ];
    
    // Связь с вопросом
    public function question() {
        return $this->belongsTo(Question::class);
    }
    use HasFactory;
}
