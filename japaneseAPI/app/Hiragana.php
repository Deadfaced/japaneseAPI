<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiragana extends Model
{
    protected $fillable = [
        'hiragana',
        'romaji',
        'other',
    ];
}
