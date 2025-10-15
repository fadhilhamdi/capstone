<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CbrResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'input_features',
        'predicted_label',
        'similarity',
        'level',
        'solution',
        'recommendation',
        'suggestion'
    ];

    protected $casts = [
        'input_features' => 'array',
    ];
}
