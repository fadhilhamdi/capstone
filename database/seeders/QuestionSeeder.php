<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Pertanyaan kategori Speech Delay Non-Autisme
        $nonAutisme = [
            'Anak merespons saat dipanggil, tapi kosa kata sangat terbatas.',
            'Anak paham perintah sederhana tetapi sulit mengucapkannya.',
            'Sering menunjuk benda yang diinginkan namun tidak bisa menyebutkan namanya.',
            'Menggunakan gestur (menunjuk, melambaikan tangan) untuk berkomunikasi.',
            'Anak bisa menirukan suara atau lagu pendek, tapi pengucapannya tidak jelas.',
            'Anak memahami percakapan orang lain, tetapi bicara satu-dua kata saja.',
            'Mampu melakukan kontak mata dan tersenyum saat diajak bicara.',
            'Aktif bermain dengan anak lain, tapi lebih sering diam atau mendengarkan.',
            'Tidak menunjukkan perilaku berulang (flapping, berputar, dll.).',
            'Tertarik berinteraksi dengan orang, meski kemampuan bicara lambat.'
        ];

        foreach ($nonAutisme as $text) {
            Question::create([
                'category' => 'non_autisme',
                'text' => $text
            ]);
        }

        // ✅ Pertanyaan kategori Speech Delay Autisme
        $autisme = [
            'Tidak menoleh saat dipanggil namanya.',
            'Tidak melakukan kontak mata saat diajak berbicara.',
            'Tidak menunjukkan atau menunjuk benda yang diinginkan.',
            'Tidak meniru suara, ekspresi, atau gerakan orang lain.',
            'Tidak menggunakan gestur seperti melambaikan tangan atau menunjuk.',
            'Tidak berespons terhadap perintah sederhana.',
            'Mengulang kata atau frasa tanpa konteks (echolalia).',
            'Sering berperilaku berulang (menepuk tangan, berputar, menyusun benda).',
            'Kurang menunjukkan ekspresi emosi atau kesulitan memahami emosi orang lain.',
            'Tidak tertarik bermain bersama anak lain (lebih suka bermain sendiri).'
        ];

        foreach ($autisme as $text) {
            Question::create([
                'category' => 'autisme',
                'text' => $text
            ]);
        }

        echo "✅ 20 pertanyaan berhasil dimasukkan ke tabel 'questions'.\n";
    }
}
