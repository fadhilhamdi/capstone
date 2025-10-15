<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaseBase;

class CaseBaseSeeder extends Seeder
{
    public function run(): void
    {
        $path = storage_path('app/speechdelay_A1-A5.csv');

        if (!file_exists($path)) {
            echo "❌ File CSV tidak ditemukan di: $path\n";
            return;
        }

        echo "📂 Membaca file: $path\n";

        $data = array_map('str_getcsv', file($path));
        $header = array_shift($data); // hapus header CSV

        echo "🔢 Jumlah data terbaca: " . count($data) . "\n";

        foreach ($data as $row) {
            if (count($row) < 6) continue; // skip baris tidak lengkap

            CaseBase::create([
                'a1' => (float) $row[0],
                'a2' => (float) $row[1],
                'a3' => (float) $row[2],
                'a4' => (float) $row[3],
                'a5' => (float) $row[4],
                'label' => $row[5],
            ]);
        }

        echo "✅ Dataset berhasil dimasukkan ke database!\n";
    }
}
