<?php

namespace Database\Seeders;

use App\Models\ExamAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ExamAnswer::create([
            'user_id' => 1,
            'exam_id' => 1,
            'question_id' => 1,
            'chosen_options' => 'A programming language',
            'is_correct' => true,
        ]);

        ExamAnswer::create([
            'user_id' => 2,
            'exam_id' => 2,
            'question_id' => 2,
            'chosen_options' => 'A database',
            'is_correct' => true,
        ]);

        ExamAnswer::create([
            'user_id' => 1,
            'exam_id' => 1,
            'question_id' => 2,
            'chosen_options' => 'A PHP framework',
            'is_correct' => true,
        ]);
    }
}
