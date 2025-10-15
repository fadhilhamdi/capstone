<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Nama tabel (opsional, tapi bagus untuk eksplisit)
    protected $table = 'questions';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'category',
        'text',
    ];
}
