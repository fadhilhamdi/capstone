<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreeningSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'average_score',
        'category_scores', // bisa JSON
    ];

    protected $casts = [
        'category_scores' => 'array',
    ];
}
