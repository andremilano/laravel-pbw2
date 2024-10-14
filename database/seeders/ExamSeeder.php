<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Exam::create([
            'exam_name' => 'Midterm Exam',
            'subtopic_id' => 1,
            'questions' => json_encode([
                ['question' => 'What is PHP?', 'options' => ['A programming language', 'A database', 'A server']],
                ['question' => 'What is Laravel?', 'options' => ['A PHP framework', 'A CSS framework', 'A JavaScript library']]
            ]),
        ]);

        Exam::create([
            'exam_name' => 'Final Exam',
            'subtopic_id' => 2,
            'questions' => json_encode([
                ['question' => 'What is a REST API?', 'options' => ['A server-side app', 'A design pattern', 'An API']],
                ['question' => 'What is MySQL?', 'options' => ['A database', 'A server', 'A programming language']]
            ]),
        ]);
    }
}
