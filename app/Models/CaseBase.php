<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseBase extends Model
{
    use HasFactory;

    protected $table = 'case_bases';

    protected $fillable = [
        'a1', 'a2', 'a3', 'a4', 'a5', 'label'
    ];
}
