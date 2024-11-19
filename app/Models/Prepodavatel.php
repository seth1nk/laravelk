<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prepodavatel extends Model
{
    use HasFactory;

    protected $table = 'prepodavateli';

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'subject',
        'group',
        'age',
        'phone',
    ];
}
