<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputModel extends Model
{
    use HasFactory;

    protected $table = 'user_input';

    protected $fillable = [
        'nama',
        'email',
        'komentar',
        'pertanyaan',
    ];
}