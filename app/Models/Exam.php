<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $primaryKey = 'exam_id';
    public $timestamps = true;

    protected $fillable = [
        'exam_name',
        'subtopic_id',
        'questions'
    ];
}
