<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScreeningSession;
use App\Models\ScreeningAnswer;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class ScreeningController extends Controller
{
    public function index()
    {
        $questions = \App\Models\Question::all();

        $groupedQuestions = $questions->groupBy('category');

        return view('screening', compact('groupedQuestions'));
    }


    public function store(Request $request)
    {
        // 1️⃣ Validasi input
        $validated = $request->validate([
            'answers' => 'required|array',
        ]);

        // 2️⃣ Ambil user login (Orang tua)
        $user = Auth::user();

        // 3️⃣ Buat sesi screening baru
        $session = ScreeningSession::create([
            'user_id' => $user->id,
        ]);

        // 4️⃣ Simpan semua jawaban ke screening_answers
        foreach ($validated['answers'] as $questionId => $score) {
            ScreeningAnswer::create([
                'session_id'  => $session->id,
                'question_id' => $questionId,
                'score'       => $score,
            ]);
        }

        // 5️⃣ Hitung rata-rata per kategori
        $categoryScores = [];
        $questions = Question::whereIn('id', array_keys($validated['answers']))->get();

        foreach ($questions->groupBy('category') as $category => $qs) {
            $total = 0;
            foreach ($qs as $q) {
                $total += $validated['answers'][$q->id];
            }
            $categoryScores[$category] = round($total / count($qs), 2);
        }

        // 6️⃣ Hitung rata-rata total
        $overallAverage = round(array_sum($categoryScores) / count($categoryScores), 2);

        // 7️⃣ Simpan hasil ke session
        $session->update([
            'average_score'   => $overallAverage,
            'category_scores' => $categoryScores,
        ]);

        // 8️⃣ Redirect ke halaman hasil screening
        return redirect()->route('screening.result', ['id' => $session->id])
                         ->with('success', 'Screening berhasil disimpan!');
    }
}
