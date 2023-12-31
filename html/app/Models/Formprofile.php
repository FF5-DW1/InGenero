<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'idiomas',
        'date_of_birth',
        'height',
        'weight',
        'eyes_color',
        'hair_color',
        'additional_info',
        'artistic_skills',
        'profile_media',
        'is_active',
    ];
}
