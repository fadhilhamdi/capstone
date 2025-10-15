<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseBase;
use App\Models\CbrResult;

class CBRController extends Controller
{
    public function screening(Request $request)
    {
        // --- 1. Validasi input (20 jawaban skala 1–5)
        $data = $request->validate([
            'answers' => 'required|array|size:20',
            'answers.*' => 'numeric|min:1|max:5'
        ]);

        $answers = $data['answers'];

        // --- 2. Kelompokkan 20 pertanyaan jadi 5 fitur (A1–A5)
        $groups = array_chunk($answers, 4);
        $A = [];
        foreach ($groups as $index => $group) {
            $A[$index + 1] = round(array_sum($group) / count($group), 2);
        }

        // --- 3. Ambil seluruh case base
        $cases = CaseBase::all();
        if ($cases->isEmpty()) {
            return response()->json(['error' => 'Dataset CaseBase kosong.'], 400);
        }

        $results = [];

        // --- 4. Hitung similarity (Euclidean distance)
        foreach ($cases as $case) {
            $distance = sqrt(
                pow($A[1] - $case->a1, 2) +
                pow($A[2] - $case->a2, 2) +
                pow($A[3] - $case->a3, 2) +
                pow($A[4] - $case->a4, 2) +
                pow($A[5] - $case->a5, 2)
            );

            $similarity = 1 / (1 + $distance);
            $results[] = [
                'case_id' => $case->id,
                'label' => $case->label,
                'similarity' => round($similarity, 4)
            ];
        }

        // --- 5. Ambil case paling mirip
        usort($results, fn($a, $b) => $b['similarity'] <=> $a['similarity']);
        $best = $results[0];

        // --- 6. Tentukan level kemiripan
        $level = match (true) {
            $best['similarity'] >= 0.9 => 'Sangat Tinggi',
            $best['similarity'] >= 0.7 => 'Tinggi',
            $best['similarity'] >= 0.5 => 'Sedang',
            $best['similarity'] >= 0.3 => 'Rendah',
            default => 'Sangat Rendah'
        };

        // --- 7. Tentukan hasil akhir (label, solusi, rekomendasi)
        $label = $best['label'];
        if ($label === 'Speech Delay Autisme') {
            $solution = "Perlu observasi lanjutan oleh terapis wicara dan psikolog anak.";
            $recommendation = "Segera lakukan terapi komunikasi dan interaksi sosial rutin.";
            $suggestion = "Pantau respon anak terhadap suara dan ajak komunikasi dengan aktivitas sederhana seperti bermain atau bernyanyi.";
        } else {
            $solution = "Perlu stimulasi bicara dan latihan pengucapan.";
            $recommendation = "Lakukan permainan interaktif untuk memperkuat kosa kata anak.";
            $suggestion = "Latih pengucapan melalui lagu atau cerita setiap hari.";
        }

        // --- 8. Simpan hasil ke tabel CbrResult
        $result = CbrResult::create([
            'input_features' => $A,
            'predicted_label' => $label,
            'similarity' => $best['similarity'],
            'level' => $level,
            'solution' => $solution,
            'recommendation' => $recommendation,
            'suggestion' => $suggestion,
        ]);

        // --- 9. Tambahkan kasus baru ke CaseBase (retain learning)
        CaseBase::create([
            'a1' => $A[1],
            'a2' => $A[2],
            'a3' => $A[3],
            'a4' => $A[4],
            'a5' => $A[5],
            'label' => $label,
        ]);

        // --- 10. Kembalikan hasil JSON
        return response()->json([
            'message' => '✅ Screening selesai dan kasus baru disimpan sebagai pembelajaran.',
            'input_features' => $A,
            'predicted_label' => $label,
            'similarity' => $best['similarity'],
            'level' => $level,
            'solution' => $solution,
            'recommendation' => $recommendation,
            'suggestion' => $suggestion,
            'saved_result_id' => $result->id,
        ]);
    }
}
