<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        // Nonaktifkan constraint foreign key dulu biar bisa truncate aman
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('questions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Daftar pertanyaan per kategori
        $questions = [
            // 🗣️ Komunikasi & Respons Suara
            ['question_text' => 'Anak merespons saat dipanggil, tapi kosa kata sangat terbatas', 'category' => 'komunikasi_respons_suara'],
            ['question_text' => 'Tidak menoleh saat dipanggil namanya', 'category' => 'komunikasi_respons_suara'],
            ['question_text' => 'Anak bisa menirukan suara atau lagu pendek, tapi pengucapannya tidak jelas', 'category' => 'komunikasi_respons_suara'],
            ['question_text' => 'Mengulang kata atau frasa tanpa konteks (echolalia)', 'category' => 'komunikasi_respons_suara'],

            // 👥 Sosial & Interaksi
            ['question_text' => 'Tidak melakukan kontak mata saat diajak berbicara', 'category' => 'sosial_interaksi'],
            ['question_text' => 'Tertarik berinteraksi dengan orang, meski kemampuan bicara lambat', 'category' => 'sosial_interaksi'],
            ['question_text' => 'Tidak tertarik bermain bersama anak lain (lebih suka bermain sendiri)', 'category' => 'sosial_interaksi'],
            ['question_text' => 'Aktif bermain dengan anak lain, tapi lebih sering diam atau mendengarkan', 'category' => 'sosial_interaksi'],

            // 🧠 Kognitif & Pemahaman
            ['question_text' => 'Anak paham perintah sederhana tetapi sulit mengucapkannya', 'category' => 'kognitif_pemahaman'],
            ['question_text' => 'Tidak berespons terhadap perintah sederhana', 'category' => 'kognitif_pemahaman'],
            ['question_text' => 'Anak memahami percakapan orang lain, tetapi bicara satu-dua kata saja', 'category' => 'kognitif_pemahaman'],
            ['question_text' => 'Tidak meniru suara, ekspresi, atau gerakan orang lain', 'category' => 'kognitif_pemahaman'],

            // 🎯 Perhatian & Fokus
            ['question_text' => 'Menggunakan gestur (menunjuk, melambaikan tangan) untuk berkomunikasi', 'category' => 'perhatian_fokus'],
            ['question_text' => 'Tidak menggunakan gestur seperti melambaikan tangan atau menunjuk', 'category' => 'perhatian_fokus'],
            ['question_text' => 'Sering berperilaku berulang (menepuk tangan, berputar, menyusun benda)', 'category' => 'perhatian_fokus'],
            ['question_text' => 'Tidak menunjukkan perilaku berulang (flapping, berputar, dll.)', 'category' => 'perhatian_fokus'],

            // 💖 Emosi & Ekspresi
            ['question_text' => 'Mampu melakukan kontak mata dan tersenyum saat diajak bicara', 'category' => 'emosi_ekspresi'],
            ['question_text' => 'Kurang menunjukkan ekspresi emosi atau kesulitan memahami emosi orang lain', 'category' => 'emosi_ekspresi'],
            ['question_text' => 'Sering menunjuk benda yang diinginkan namun tidak bisa menyebutkan namanya', 'category' => 'emosi_ekspresi'],
            ['question_text' => 'Tidak menunjukkan atau menunjuk benda yang diinginkan', 'category' => 'emosi_ekspresi'],
        ];

        // Masukkan data ke database
        foreach ($questions as $question) {
            Question::create($question);
        }

        $this->command->info('✅ QuestionSeeder berhasil dijalankan! 20 pertanyaan telah dimasukkan ke database.');
    }
}
