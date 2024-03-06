<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Score;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LastTestController extends Controller
{
    public function area1()
    {
        $userAuth = Auth::user();

        $questions = Question::where('area', '1')->where('tes_ke', '2')->get();

        $userTests = [];
        foreach ($questions as $question) {
            $tests = $question->tests->where('user_id', $userAuth->id);
            foreach ($tests as $test) {
                $userTests[$question->id][$userAuth->id][] = $test;
            }
        }

        return view('users.pages.last-test.area-1', compact('questions', 'userTests', 'userAuth'));
    }

    public function store1(Request $request)
    {
        // dd($request);
        try {
            $selectedAnswer = $request->input('selected_answer');
            $userId = $request->input('user_id');
            $questionId = $request->input('question_id');

            // Find the correct answer for the question
            $correctAnswer = Answer::where('question_id', $questionId)->where('benar', true)->first();

            // Check if the selected answer is correct
            $isCorrect = $selectedAnswer == $correctAnswer->jawaban;

            $test = new Test();
            $test->user_id = $userId ;
            $test->question_id = $questionId;
            if ($isCorrect) {
                $test->skor_tmp = '100';
            } else {
                $test->skor_tmp = '0'; 
            }
    
            $test->save();
    
            return redirect('/last-test/area-1');
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function area2()
    {
        $userAuth = Auth::user();

        $questions = Question::where('area', '2')->where('tes_ke', '2')->get();
        
        $userTests = [];
        foreach ($questions as $question) {
            $tests = $question->tests->where('user_id', $userAuth->id);
            foreach ($tests as $test) {
                $userTests[$question->id][$userAuth->id][] = $test;
            }
        }

        $questions2 = Question::where(function ($query) {
                                $query->where('area', '1')
                                        ->orWhere('area', '2');
                                        })->where('tes_ke', '2')->get();

        $userTests2 = [];
        foreach ($questions2 as $question) {
            $tests = $question->tests->where('user_id', $userAuth->id);
            foreach ($tests as $test) {
                $userTests2[$question->id][$userAuth->id][] = $test;
            }
        }

        return view('users.pages.last-test.area-2', compact('questions', 'userTests', 'userAuth', 'userTests2'));
    }

    public function store2(Request $request)
    {
        // dd($request);
        try {
            $selectedAnswer = $request->input('selected_answer');
            $userId = $request->input('user_id');
            $questionId = $request->input('question_id');

            // Find the correct answer for the question
            $correctAnswer = Answer::where('question_id', $questionId)->where('benar', true)->first();

            // Check if the selected answer is correct
            $isCorrect = $selectedAnswer == $correctAnswer->jawaban;

            $test = new Test();
            $test->user_id = $userId ;
            $test->question_id = $questionId;
            if ($isCorrect) {
                $test->skor_tmp = '100';
            } else {
                $test->skor_tmp = '0'; 
            }
    
            $test->save();
    
            return redirect('/last-test/area-2');
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function area3()
    {
        $userAuth = Auth::user();

        $questions = Question::where('area', '3')->where('tes_ke', '2')->get();

        $userTests = [];
        foreach ($questions as $question) {
            $tests = $question->tests->where('user_id', $userAuth->id);
            foreach ($tests as $test) {
                $userTests[$question->id][$userAuth->id][] = $test;
            }
        }

        $questions3 = Question::where(function ($query) {
            $query->where('area', '1')
                    ->orWhere('area', '2')
                        ->orWhere('area', '3');
                    })->where('tes_ke', '2')->get();

        $userTests3 = [];
        foreach ($questions3 as $question) {
            $tests = $question->tests->where('user_id', $userAuth->id);
            foreach ($tests as $test) {
                $userTests3[$question->id][$userAuth->id][] = $test;
            }
        }

        return view('users.pages.last-test.area-3', compact('questions', 'userTests', 'userAuth', 'userTests3'));
    }

    public function store3(Request $request)
    {
        // dd($request);
        try {
            $selectedAnswer = $request->input('selected_answer');
            $userId = $request->input('user_id');
            $questionId = $request->input('question_id');

            // Find the correct answer for the question
            $correctAnswer = Answer::where('question_id', $questionId)->where('benar', true)->first();

            // Check if the selected answer is correct
            $isCorrect = $selectedAnswer == $correctAnswer->jawaban;

            $test = new Test();
            $test->user_id = $userId ;
            $test->question_id = $questionId;
            if ($isCorrect) {
                $test->skor_tmp = '100';
            } else {
                $test->skor_tmp = '0'; 
            }
    
            $test->save();
    
            return redirect('/last-test/area-3');
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function testSubmit(Request $request)
    {
        // dd($request);
        try {
            $userId = $request->input('user_id');

            $questions3 = Question::where(function ($query) {
                $query->where('area', '1')
                        ->orWhere('area', '2')
                            ->orWhere('area', '3');
                        })->where('tes_ke', '2')->get();
    
            $userTests3 = [];
            $skorTotal = 0;
            foreach ($questions3 as $question) {
                $tests = $question->tests->where('user_id', $userId);
                foreach ($tests as $test) {
                    $userTests3[$question->id][$userId][] = $test;
                    $skorTotal += $test->skor_tmp;
                }
            }
            // dd($skorTotal);

            $score = new Score();
            $score->user_id = $userId ;
            $score->skor_total = $skorTotal;
            $score->tes_ke = '2';

            $existingScore = Score::where('user_id', $userId)->where('tes_ke', '2')->latest()->first();

            // Determine the value for sesi_ke
            $sesiKe = $existingScore ? $existingScore->sesi_ke + 1 : 1;

            $score->sesi_ke = $sesiKe;
    
            $score->save();

            Test::where('user_id', $userId)->delete();

            if ($sesiKe == 2) {
                User::where('id', $userId)->update(['last_test' => true]);
            }
    
            return redirect('/last-test/result');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function result()
    {
        $userAuth = Auth::user();
    
        $skorId = Score::where('user_id', $userAuth->id)->latest()->first();

        $skorTotal = $skorId->skor_total;

        return view('users.pages.last-test.result', compact('skorTotal'));
    }
}
