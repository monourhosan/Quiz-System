<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Mcq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure admin user exists
        if (!DB::table('admin')->where('name', 'saif')->exists()) {
            DB::table('admin')->insert([
                'name' => 'saif',
                'password' => '1234',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => 1234,
            ]);
        }

        // Ensure a test user exists
        if (!User::where('email', 'test@example.com')->exists()) {
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password123'),
                'active' => 2,
            ]);
        }

        // Ensure sample categories and quizzes exist if empty
        if (Category::count() === 0) {
            $catWeb = Category::create([
                'name' => 'Web Development',
                'creator' => 'saif',
            ]);

            $catGK = Category::create([
                'name' => 'General Knowledge',
                'creator' => 'saif',
            ]);

            $quizPhp = Quiz::create([
                'name' => 'PHP Basics',
                'category_id' => $catWeb->id,
            ]);

            Mcq::create([
                'question' => 'What does PHP stand for?',
                'a' => 'Personal Home Page',
                'b' => 'Hypertext Preprocessor',
                'c' => 'Pretext Hypertext Processor',
                'd' => 'Public Hosting Protocol',
                'correct_ans' => 'b',
                'admin_id' => 1,
                'quiz_id' => $quizPhp->id,
                'category_id' => $catWeb->id,
            ]);

            Mcq::create([
                'question' => 'Which symbol is used for variables in PHP?',
                'a' => '&',
                'b' => '@',
                'c' => '$',
                'd' => '#',
                'correct_ans' => 'c',
                'admin_id' => 1,
                'quiz_id' => $quizPhp->id,
                'category_id' => $catWeb->id,
            ]);

            Mcq::create([
                'question' => 'Which function is used to output text in PHP?',
                'a' => 'echo',
                'b' => 'print_line',
                'c' => 'write',
                'd' => 'display',
                'correct_ans' => 'a',
                'admin_id' => 1,
                'quiz_id' => $quizPhp->id,
                'category_id' => $catWeb->id,
            ]);

            $quizGK = Quiz::create([
                'name' => 'World Capitals',
                'category_id' => $catGK->id,
            ]);

            Mcq::create([
                'question' => 'What is the capital of France?',
                'a' => 'Berlin',
                'b' => 'Madrid',
                'c' => 'Rome',
                'd' => 'Paris',
                'correct_ans' => 'd',
                'admin_id' => 1,
                'quiz_id' => $quizGK->id,
                'category_id' => $catGK->id,
            ]);
        }
    }
}
