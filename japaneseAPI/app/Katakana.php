<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katakana extends Model
{
    protected $fillable = [
        'katakana',
        'romaji',
        'other',
    ];
}
