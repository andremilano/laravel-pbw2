<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory;
    protected $primaryKey = 'answer_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'chosen_options',
        'is_correct'
    ];
}
