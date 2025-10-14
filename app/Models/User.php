<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token', // tetap bisa hidden
    ];

    // Nonaktifkan kolom database remember_token
    public function getRememberToken() {
        return cache("remember_{$this->id}");
    }

    public function setRememberToken($value) {
        cache(["remember_{$this->id}" => $value], 60*24*30); // simpan 30 hari
    }

    public function getRememberTokenName() {
        return null;
    }
}
